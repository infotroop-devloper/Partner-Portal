"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, a, r, s = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), a.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), a.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = s[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    country: {
                        validators: {
                            notEmpty: {
                                message: "Country is required"
                            }
                        }
                    },service_type: {
                        validators: {
                            notEmpty: {
                                message: "Service type is required"
                            }
                        }
                    }
                    ,sub_service_type: {
                        validators: {
                            notEmpty: {
                                message: "Service sub-type is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    partner_name: {
                        validators: {
                            notEmpty: {
                                message: "Company Name is required"
                            }
                        }
                    },
                    company_head: {
                        validators: {
                            notEmpty: {
                                message: "Company head name is required"
                            }
                        }
                    },
                    email_id: {
                        validators: {
                            notEmpty: {
                                message: "Email-id is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    phone_no: {
                        validators: {
                            notEmpty: {
                                message: "Phone Number is required"
                            }
                        }
                    },
                    website_url: {
                        validators: {
                            notEmpty: {
                                message: "Webiste URL is required"
                            }
                        }
                    },
                    pan: {
                        validators: {
                            notEmpty: {
                                message: "PAN Number is required"
                            }
                        }
                    },
                    gst: {
                        validators: {
                            notEmpty: {
                                message: "GST Number is required"
                            }
                        }
                    },
                    is_subsidiary: {
                        validators: {
                            notEmpty: {
                                message: "Subsidiary is required"
                            }
                        }
                    },
                    address_line1: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: "City is required"
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: "State is required"
                            }
                        }
                    },
                    pcountry: {
                        validators: {
                            notEmpty: {
                                message: "Country is required"
                            }
                        }
                    },
                    zipcode: {
                        validators: {
                            notEmpty: {
                                message: "Zipcode is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    full_name: {
                        validators: {
                            notEmpty: {
                                message: "Full name is required"
                            }
                        }
                    },
                    corporate_email: {
                        validators: {
                            notEmpty: {
                                message: "Corporate Email-id is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    primary_phone: {
                        validators: {
                            notEmpty: {
                                message: "Phone Number is required"
                            }
                        }
                    },
                    primary_mobile: {
                        validators: {
                            notEmpty: {
                                message: "Busines email is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    job_function: {
                        validators: {
                            notEmpty: {
                                message: "Job Function is required"
                            }
                        }
                    },
                    job_function_role: {
                        validators: {
                            notEmpty: {
                                message: "Job Function Role is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), s.push(FormValidation.formValidation(i, {
                fields: {
                    agree_tnc: {
                        validators: {
                            notEmpty: {
                                message: "Terms And Condition is required"
                            }
                        }
                    },
                    coc: {
                        validators: {
                            notEmpty: {
                                message: "Code of Conduct is required"
                            }
                        }
                    },
                    bribe_go: {
                        validators: {
                            notEmpty: {
                                message: "This is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function(e) {
                s[3].validate().then((function(t) {
                    console.log("validated!"),
                    "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            }))
           )}
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTCreateAccount.init()
}));