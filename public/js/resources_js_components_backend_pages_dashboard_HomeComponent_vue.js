"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_backend_pages_dashboard_HomeComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      logs: []
    };
  },
  created: function created() {
    var _this = this;

    axios.get('/activities').then(function (response) {
      console.log(response);
      _this.logs = response.data;
    })["catch"](function (error) {});
  }
});

/***/ }),

/***/ "./resources/js/components/backend/pages/dashboard/HomeComponent.vue":
/*!***************************************************************************!*\
  !*** ./resources/js/components/backend/pages/dashboard/HomeComponent.vue ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true& */ "./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true&");
/* harmony import */ var _HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./HomeComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "1fd4e942",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/backend/pages/dashboard/HomeComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HomeComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true&":
/*!**********************************************************************************************************************!*\
  !*** ./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true& ***!
  \**********************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HomeComponent_vue_vue_type_template_id_1fd4e942_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/pages/dashboard/HomeComponent.vue?vue&type=template&id=1fd4e942&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "container-fluid" }, [
      _c("div", { staticClass: "row" }, [
        _vm._m(0),
        _vm._v(" "),
        _vm._m(1),
        _vm._v(" "),
        _vm._m(2),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass:
              "col-xl-4 des-xl-50 box-col-12 activity-sec chart_data_left"
          },
          [
            _c("div", { staticClass: "card" }, [
              _vm._m(3),
              _vm._v(" "),
              _c("div", { staticClass: "card-body" }, [
                _c(
                  "div",
                  { staticClass: "chart-main activity-timeline update-line" },
                  _vm._l(_vm.logs, function(log) {
                    return _c("div", { key: log.id, staticClass: "media" }, [
                      _c("div", { staticClass: "activity-line" }),
                      _vm._v(" "),
                      _c("div", { staticClass: "activity-dot-primary" }),
                      _vm._v(" "),
                      _c("div", { staticClass: "media-body d-block" }, [
                        _c("h6", [
                          _c("span", { staticClass: "font-primary" }, [
                            _vm._v(
                              " " +
                                _vm._s(_vm._f("timeformat")(log.created_at)) +
                                " "
                            )
                          ])
                        ]),
                        _vm._v(" "),
                        _c("h5", [
                          _vm._v(_vm._s(log.log_name)),
                          _c("i", {
                            staticClass:
                              "fa fa-circle circle-dot-primary pull-right"
                          })
                        ]),
                        _vm._v(" "),
                        _c("p", [_vm._v(_vm._s(log.description))])
                      ])
                    ])
                  }),
                  0
                ),
                _vm._v(" "),
                _vm._m(4)
              ])
            ])
          ]
        ),
        _vm._v(" "),
        _vm._m(5)
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "col-xl-6 box-col-12 des-xl-100 invoice-sec" },
      [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header" }, [
            _c(
              "div",
              {
                staticClass:
                  "header-top d-sm-flex justify-content-between align-items-center"
              },
              [
                _c("h5", [_vm._v("Invoice Overview    ")]),
                _vm._v(" "),
                _c("div", { staticClass: "center-content" }, [
                  _c("p", { staticClass: "d-sm-flex align-items-center" }, [
                    _c("span", { staticClass: "m-r-10" }, [
                      _vm._v("$5,56548k")
                    ]),
                    _c("i", {
                      staticClass: "toprightarrow-primary fa fa-arrow-up m-r-10"
                    }),
                    _vm._v("94% More Than Last Year")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "setting-list" }, [
                  _c("ul", { staticClass: "list-unstyled setting-option" }, [
                    _c("li", [
                      _c("div", { staticClass: "setting-primary" }, [
                        _c("i", { staticClass: "icon-settings" })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass: "view-html fa fa-code font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-maximize full-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-minus minimize-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-refresh reload-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-error close-card font-primary"
                      })
                    ])
                  ])
                ])
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body p-0" }, [
            _c("div", { attrs: { id: "timeline-chart" } }),
            _vm._v(" "),
            _c("div", { staticClass: "code-box-copy" }, [
              _c(
                "button",
                {
                  staticClass: "code-box-copy__btn btn-clipboard",
                  attrs: {
                    "data-clipboard-target": "#invoice-overview",
                    title: "Copy"
                  }
                },
                [_c("i", { staticClass: "icofont icofont-copy-alt" })]
              ),
              _vm._v(" "),
              _c("pre", [
                _c("code", {
                  staticClass: "language-html",
                  attrs: { id: "invoice-overview" }
                })
              ])
            ])
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "col-xl-6 box-col-12 des-xl-100 top-dealer-sec" },
      [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header pb-0" }, [
            _c(
              "div",
              {
                staticClass:
                  "header-top d-sm-flex justify-content-between align-items-center"
              },
              [
                _c("h5", [_vm._v("Top Dealer")]),
                _vm._v(" "),
                _c("div", { staticClass: "center-content" }, [
                  _c("p", { staticClass: "d-sm-flex align-items-center" }, [
                    _c("span", { staticClass: "m-r-10" }, [
                      _vm._v("845 Dealer")
                    ]),
                    _c("i", {
                      staticClass: "toprightarrow-primary fa fa-arrow-up m-r-10"
                    }),
                    _vm._v("86% More Than Last Year")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "setting-list" }, [
                  _c("ul", { staticClass: "list-unstyled setting-option" }, [
                    _c("li", [
                      _c("div", { staticClass: "setting-primary" }, [
                        _c("i", { staticClass: "icon-settings" })
                      ])
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass: "view-html fa fa-code font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-maximize full-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-minus minimize-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-refresh reload-card font-primary"
                      })
                    ]),
                    _vm._v(" "),
                    _c("li", [
                      _c("i", {
                        staticClass:
                          "icofont icofont-error close-card font-primary"
                      })
                    ])
                  ])
                ])
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body" }, [
            _c(
              "div",
              {
                staticClass: "owl-carousel owl-theme",
                attrs: { id: "owl-carousel-14" }
              },
              [
                _c("div", { staticClass: "item" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/1.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Johnson allon")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Bangladesh")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/3.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("williams reed")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Belgium")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/4.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v(" Jones king")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Canada")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/5.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Brown davis")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("China")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/6.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Wilson Hill")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Denmark")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/7.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Anderson ban")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Japan")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "item" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/1.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Johnson allon")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Bangladesh")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/3.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("williams reed")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Belgium")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/4.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v(" Jones king")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Canada")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/5.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Brown davis")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("China")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/6.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Wilson Hill")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Denmark")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/7.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Anderson ban")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Japan")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "item" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/1.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Johnson allon")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Bangladesh")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/3.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("williams reed")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Belgium")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/4.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v(" Jones king")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Canada")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/5.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Brown davis")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("China")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/6.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Wilson Hill")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Denmark")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/7.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Anderson ban")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Japan")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "item" }, [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/1.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Johnson allon")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Bangladesh")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/3.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("williams reed")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Belgium")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/4.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v(" Jones king")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Canada")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-12" }, [
                      _c(
                        "div",
                        {
                          staticClass: "owl-carousel-16 owl-carousel owl-theme"
                        },
                        [
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/5.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Brown davis")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("China")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/6.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Wilson Hill")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Denmark")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/7.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Anderson ban")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Japan")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "item" }, [
                            _c("div", { staticClass: "card" }, [
                              _c(
                                "div",
                                { staticClass: "top-dealerbox text-center" },
                                [
                                  _c("img", {
                                    staticClass: "card-img-top",
                                    attrs: {
                                      src: "assets/images/dashboard-2/8.png",
                                      alt: "..."
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("h6", [_vm._v("Thompson lee")]),
                                  _vm._v(" "),
                                  _c("p", [_vm._v("Malasiya")]),
                                  _c(
                                    "a",
                                    {
                                      staticClass: "btn btn-rounded",
                                      attrs: { href: "social-app.html" }
                                    },
                                    [_vm._v("View More")]
                                  )
                                ]
                              )
                            ])
                          ])
                        ]
                      )
                    ])
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "code-box-copy" }, [
              _c(
                "button",
                {
                  staticClass: "code-box-copy__btn btn-clipboard",
                  attrs: {
                    "data-clipboard-target": "#top-dealer",
                    title: "Copy"
                  }
                },
                [_c("i", { staticClass: "icofont icofont-copy-alt" })]
              )
            ])
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "col-xl-8 col-md- des-xl-100 box-col-12" },
      [
        _c("div", { staticClass: "row" }, [
          _c(
            "div",
            { staticClass: "col-xl-3 col-sm-6 box-col-3 chart_data_right" },
            [
              _c("div", { staticClass: "card income-card card-secondary" }, [
                _c("div", { staticClass: "card-body align-items-center" }, [
                  _c(
                    "div",
                    { staticClass: "round-progress knob-block text-center" },
                    [
                      _c("div", { staticClass: "progress-circle" }, [
                        _c("input", {
                          staticClass: "knob1",
                          attrs: {
                            "data-width": "10",
                            "data-height": "70",
                            "data-thickness": ".3",
                            "data-angleoffset": "0",
                            "data-linecap": "round",
                            "data-fgcolor": "#ba895d",
                            "data-bgcolor": "#e0e9ea",
                            value: "60"
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c("h5", [_vm._v("$9,84,235")]),
                      _vm._v(" "),
                      _c("p", [_vm._v("Our Annual Income")])
                    ]
                  )
                ])
              ])
            ]
          ),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass: "col-xl-3 col-sm-6 box-col-3 chart_data_right second"
            },
            [
              _c("div", { staticClass: "card income-card card-primary" }, [
                _c("div", { staticClass: "card-body" }, [
                  _c(
                    "div",
                    { staticClass: "round-progress knob-block text-center" },
                    [
                      _c("div", { staticClass: "progress-circle" }, [
                        _c("input", {
                          staticClass: "knob1",
                          attrs: {
                            "data-width": "50",
                            "data-height": "70",
                            "data-thickness": ".3",
                            "data-fgcolor": "#665ed",
                            "data-linecap": "round",
                            "data-angleoffset": "0",
                            value: "60"
                          }
                        })
                      ]),
                      _vm._v(" "),
                      _c("h5", [_vm._v("$4,55,462")]),
                      _vm._v(" "),
                      _c("p", [_vm._v("Our Annual Income")])
                    ]
                  )
                ])
              ])
            ]
          ),
          _vm._v(" "),
          _c("div", { staticClass: "col-xl-6 box-col-6 top-sell-sec" }, [
            _c("div", { staticClass: "card" }, [
              _c("div", { staticClass: "card-header pb-0" }, [
                _c(
                  "div",
                  {
                    staticClass:
                      "header-top d-sm-flex justify-content-between align-items-center"
                  },
                  [
                    _c("h5", [_vm._v("Top Selling Product")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "center-content" }, [
                      _c("ul", { staticClass: "week-date" }, [
                        _c("li", { staticClass: "font-primary" }, [
                          _vm._v("Today")
                        ]),
                        _vm._v(" "),
                        _c("li", [_vm._v("Month")])
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "setting-list" }, [
                      _c(
                        "ul",
                        { staticClass: "list-unstyled setting-option" },
                        [
                          _c("li", [
                            _c("div", { staticClass: "setting-primary" }, [
                              _c("i", { staticClass: "icon-settings" })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass: "view-html fa fa-code font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-maximize full-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-minus minimize-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-refresh reload-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-error close-card font-primary"
                            })
                          ])
                        ]
                      )
                    ])
                  ]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card-body" }, [
                _c("div", { staticClass: "media" }, [
                  _c("img", {
                    staticClass: "img-fluid",
                    attrs: { src: "assets/images/dashboard-2/9.png", alt: "" }
                  }),
                  _vm._v(" "),
                  _c("div", { staticClass: "media-body" }, [
                    _c("a", { attrs: { href: "product-page.html" } }, [
                      _c("h6", [_vm._v("Trending Nike shoes")])
                    ]),
                    _vm._v(" "),
                    _c("p", [_vm._v("New Offer Only $126.00")]),
                    _vm._v(" "),
                    _c("ul", { staticClass: "rating-star" }, [
                      _c("li", [_c("i", { staticClass: "fa fa-star" })]),
                      _vm._v(" "),
                      _c("li", [_c("i", { staticClass: "fa fa-star" })]),
                      _vm._v(" "),
                      _c("li", [_c("i", { staticClass: "fa fa-star" })]),
                      _vm._v(" "),
                      _c("li", [_c("i", { staticClass: "fa fa-star" })]),
                      _vm._v(" "),
                      _c("li", [_c("i", { staticClass: "fa fa-star" })])
                    ])
                  ]),
                  _c(
                    "a",
                    {
                      staticClass: "btn btn-iconsolid",
                      attrs: { href: "cart.html" }
                    },
                    [_c("i", { staticClass: "icon-bag" })]
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "code-box-copy" }, [
                  _c(
                    "button",
                    {
                      staticClass: "code-box-copy__btn btn-clipboard",
                      attrs: {
                        "data-clipboard-target": "#top-selling-product",
                        title: "Copy"
                      }
                    },
                    [_c("i", { staticClass: "icofont icofont-copy-alt" })]
                  ),
                  _vm._v(" "),
                  _c("pre", [
                    _c("code", {
                      staticClass: "language-html",
                      attrs: { id: "top-selling-product" }
                    })
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-xl-6 box-col-6" }, [
            _c("div", { staticClass: "card" }, [
              _c("div", { staticClass: "card-header" }, [
                _c(
                  "div",
                  {
                    staticClass:
                      "header-top d-sm-flex justify-content-between align-items-center"
                  },
                  [
                    _c("h5", [_vm._v("Total Selling")]),
                    _vm._v(" "),
                    _c("div", { staticClass: "center-content" }, [
                      _c("ul", { staticClass: "week-date" }, [
                        _c("li", { staticClass: "font-primary" }, [
                          _vm._v("Today")
                        ]),
                        _vm._v(" "),
                        _c("li", [
                          _vm._v("Month                                     ")
                        ])
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "setting-list" }, [
                      _c(
                        "ul",
                        { staticClass: "list-unstyled setting-option" },
                        [
                          _c("li", [
                            _c("div", { staticClass: "setting-primary" }, [
                              _c("i", { staticClass: "icon-settings" })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass: "view-html fa fa-code font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-maximize full-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-minus minimize-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-refresh reload-card font-primary"
                            })
                          ]),
                          _vm._v(" "),
                          _c("li", [
                            _c("i", {
                              staticClass:
                                "icofont icofont-error close-card font-primary"
                            })
                          ])
                        ]
                      )
                    ])
                  ]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card-body chart-block p-0" }, [
                _c("div", { attrs: { id: "chart-dash-2-line" } }),
                _vm._v(" "),
                _c("div", { staticClass: "code-box-copy" }, [
                  _c(
                    "button",
                    {
                      staticClass: "code-box-copy__btn btn-clipboard",
                      attrs: {
                        "data-clipboard-target": "#total-selling",
                        title: "Copy"
                      }
                    },
                    [_c("i", { staticClass: "icofont icofont-copy-alt" })]
                  ),
                  _vm._v(" "),
                  _c("pre", [
                    _c(
                      "code",
                      {
                        staticClass: "language-html",
                        attrs: { id: "total-selling" }
                      },
                      [_vm._v("       ")]
                    )
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-xl-6 box-col-6" }, [
            _c("div", { staticClass: "card target-sec" }, [
              _c("div", { staticClass: "card-header pb-0" }, [
                _c("ul", { staticClass: "target-list" }, [
                  _c("li", [
                    _c("h6", [_vm._v("Our Target")]),
                    _vm._v(" "),
                    _c("p", [_vm._v("Completed")]),
                    _c("span", [_vm._v("$687.780")])
                  ]),
                  _vm._v(" "),
                  _c("li", { staticClass: "bg-primary" }, [
                    _c("h6", [_vm._v("We Archieve")]),
                    _vm._v(" "),
                    _c("p", [_vm._v("Completed in After 3 Hours")]),
                    _c("span", [
                      _vm._v("$687.780k                                     ")
                    ])
                  ])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card-body p-0" }, [
                _c("div", { staticClass: "traget-img-sec" }),
                _vm._v(" "),
                _c("div", { staticClass: "animat-block" }, [
                  _c("i", { staticClass: "fa fa-times close1" }),
                  _c("i", { staticClass: "fa fa-times close2" }),
                  _c("i", { staticClass: "fa fa-times close3" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "circle1" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "circle2" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "circle3" })
                ])
              ])
            ])
          ])
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c(
        "div",
        {
          staticClass:
            "header-top d-sm-flex justify-content-between align-items-center"
        },
        [
          _c("h5", { staticClass: "m-0" }, [_vm._v("Activity Timeline")]),
          _vm._v(" "),
          _c("div", { staticClass: "center-content" }, [
            _c("p", [_vm._v("Yearly User 24.65k")])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "setting-list" }, [
            _c("ul", { staticClass: "list-unstyled setting-option" }, [
              _c("li", [
                _c("div", { staticClass: "setting-primary" }, [
                  _c("i", { staticClass: "icon-settings" })
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("i", { staticClass: "view-html fa fa-code font-primary" })
              ]),
              _vm._v(" "),
              _c("li", [
                _c("i", {
                  staticClass: "icofont icofont-maximize full-card font-primary"
                })
              ]),
              _vm._v(" "),
              _c("li", [
                _c("i", {
                  staticClass:
                    "icofont icofont-minus minimize-card font-primary"
                })
              ]),
              _vm._v(" "),
              _c("li", [
                _c("i", {
                  staticClass:
                    "icofont icofont-refresh reload-card font-primary"
                })
              ]),
              _vm._v(" "),
              _c("li", [
                _c("i", {
                  staticClass: "icofont icofont-error close-card font-primary"
                })
              ])
            ])
          ])
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "code-box-copy" }, [
      _c(
        "button",
        {
          staticClass: "code-box-copy__btn btn-clipboard",
          attrs: {
            "data-clipboard-target": "#activity-timeline",
            title: "Copy"
          }
        },
        [_c("i", { staticClass: "icofont icofont-copy-alt" })]
      ),
      _vm._v(" "),
      _c("pre", [
        _c(
          "code",
          { staticClass: "language-html", attrs: { id: "activity-timeline" } },
          [_vm._v("   ")]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-xl-12 des-xl-50 yearly-growth-sec" }, [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card-header" }, [
          _c(
            "div",
            {
              staticClass:
                "header-top d-sm-flex justify-content-between align-items-center"
            },
            [
              _c("h5", [_vm._v("Yearly growth")]),
              _vm._v(" "),
              _c("div", { staticClass: "center-content" }, [
                _c("p", { staticClass: "d-sm-flex align-items-center" }, [
                  _c("span", { staticClass: "m-r-10" }, [
                    _c("i", {
                      staticClass: "toprightarrow-primary fa fa-arrow-up m-r-10"
                    }),
                    _vm._v("$9657.55k ")
                  ]),
                  _vm._v("86% more then last year")
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "setting-list" }, [
                _c("ul", { staticClass: "list-unstyled setting-option" }, [
                  _c("li", [
                    _c("div", { staticClass: "setting-primary" }, [
                      _c("i", { staticClass: "icon-settings" })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("li", [
                    _c("i", {
                      staticClass: "view-html fa fa-code font-primary"
                    })
                  ]),
                  _vm._v(" "),
                  _c("li", [
                    _c("i", {
                      staticClass:
                        "icofont icofont-maximize full-card font-primary"
                    })
                  ]),
                  _vm._v(" "),
                  _c("li", [
                    _c("i", {
                      staticClass:
                        "icofont icofont-minus minimize-card font-primary"
                    })
                  ]),
                  _vm._v(" "),
                  _c("li", [
                    _c("i", {
                      staticClass:
                        "icofont icofont-refresh reload-card font-primary"
                    })
                  ]),
                  _vm._v(" "),
                  _c("li", [
                    _c("i", {
                      staticClass:
                        "icofont icofont-error close-card font-primary"
                    })
                  ])
                ])
              ])
            ]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "card-body p-0 chart-block" }, [
          _c("div", { attrs: { id: "chart-yearly-growth-dash-2" } }),
          _vm._v(" "),
          _c("div", { staticClass: "code-box-copy" }, [
            _c(
              "button",
              {
                staticClass: "code-box-copy__btn btn-clipboard",
                attrs: {
                  "data-clipboard-target": "#yearly-growth",
                  title: "Copy"
                }
              },
              [_c("i", { staticClass: "icofont icofont-copy-alt" })]
            ),
            _vm._v(" "),
            _c("pre", [
              _c(
                "code",
                {
                  staticClass: "language-html",
                  attrs: { id: "yearly-growth" }
                },
                [_vm._v("       ")]
              )
            ])
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);