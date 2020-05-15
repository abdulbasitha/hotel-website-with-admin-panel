$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please Enter Your Name.",
                    minlength: "your name must consist of at least 2 characters"
                },
                subject: {
                    required: "Please Enter The Subject.",
                    minlength: "your subject must consist of at least 4 characters"
                },
                number: {
                    required: "Please Enter Your Phone Number",
                    minlength: "your Number must consist of at least 5 characters"
                },
                email: {
                    required: "Please Enter Your Email."
                },
                message: {
                    required: "Please Enter The Message.",
                    minlength: "your message must consist of at least 10 characters"
                }
            },
           
                        })
                    }
                })
            }
    
        

