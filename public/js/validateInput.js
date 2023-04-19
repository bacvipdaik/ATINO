console.log("bac")
function Validator(options) {

    function getParent(element, selector) {
        while (element.parentElement){
            if(element.parentElement.matches(selector)){
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    //validate
    function validate(inputElement, rule) {
        var errorMessage;
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        
        //lấy các rules của selector
        var rules = selectorRules[rule.selector];

        // lặp và check rule
        // lỗi thì dừng
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](formElement.querySelector(rule.selector + ':checked'));
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
            }
            
            if(errorMessage) break;
        }
        
        if(errorMessage) {
                errorElement.innerText = errorMessage;
                getParent(inputElement, options.formGroupSelector).classList.add('invalid');
            } else {
                errorElement.innerText = '';
                getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
            }

            return !errorMessage;
    }
    
    // Lấy emlement của form 
    var formElement = document.querySelector(options.form);

    if(formElement){    
        //submit form
        formElement.onsubmit = function(e) {
            e.preventDefault();

            var isFormValid = true;

            //lặp qua từng rule và validate
            options.rules.forEach((rule) => {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if(!isValid) {
                    isFormValid = false;
                }
            });

            if(isFormValid) {
                //Submit với js
                if (typeof options.onSubmit === 'function') {
                    var enableInputs = formElement.querySelectorAll('[name]:not([disabled])');
                    var formValues = Array.from(enableInputs).reduce((values, input) => {
                        
                        switch(input.type) {
                            case 'checkbox':
                                if(!input.matches(':checked')){
                                    values[input.name] = '';
                                    return values;
                                }
                                if (Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }
                                values[input.name].push(input.value);   
                                break;
                            case 'file':
                                values[input.name] = input.files;
                                break;
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name +'"]:checked').value;
                                break;
                            default:
                                values[input.name] = input.value;
                        }

                        return values;
                    }, {});
                    options.onSubmit(formValues);
                }
                //Submit mặc định
                else {
                    formElement.submit();
                }
            }
        }
        
        options.rules.forEach((rule) => {   
            //lưu lại các rule cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])){
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach((inputElement)=>{
                // Xử lý trường hợp blur khỏi input
                inputElement.onblur = function (){
                    validate(inputElement, rule);
                }

                // Xử lý khi người dùng nhập vào input
                inputElement.oninput = function() {
                    var errorElement = getParent(inputElement, options.formGroupSelector).querySelector('.form-message');
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                }
            });
        });

        // console.log(selectorRules);
    }

}

Validator.isRequired = (selector, message) => {
    return{
        selector: selector,
        test:function (value) {
            return value ? undefined : message || 'Vui lòng nhập trường này'
        }
    };
}

Validator.isphone = (selector, message) => {
    return{
        selector: selector,
        test:function (value) {
            var regex = /(84|\+84|0)(\d{9})\b/g;
            return regex.test(value) ? undefined : message || 'Trường này phải là số điện thoại!'
        }
    };
}

Validator.isEmail = function(selector, message) {
    return{
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Trường này phải là email!'
        }
    };
}

Validator.minlength = function(selector, min, message) {
    return{
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };
}

Validator.confirm = function (selector, getCofirmValue, message) {
    return{
        selector: selector,
        test: function (value) {
            return value == getCofirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác'
        }
    }
}


Validator.checked = function (selector, message) {
    return{
        selector: selector,
        test: function (value) {
            return value.checked === true ? undefined : message || 'Vui lòng lựa chọn phương thức'
        }
    }
}