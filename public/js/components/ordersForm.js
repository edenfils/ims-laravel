webpackJsonp([0],{

/***/ 233:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = __webpack_require__(100);

var _react2 = _interopRequireDefault(_react);

var _reactDom = __webpack_require__(101);

var _reactDom2 = _interopRequireDefault(_reactDom);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var Layout = function (_Component) {
    _inherits(Layout, _Component);

    function Layout() {
        var _ref;

        var _temp, _this, _ret;

        _classCallCheck(this, Layout);

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
        }

        return _ret = (_temp = (_this = _possibleConstructorReturn(this, (_ref = Layout.__proto__ || Object.getPrototypeOf(Layout)).call.apply(_ref, [this].concat(args))), _this), _this.state = {}, _temp), _possibleConstructorReturn(_this, _ret);
    }

    _createClass(Layout, [{
        key: "render",
        value: function render() {
            return _react2.default.createElement(
                "form",
                { "data-reactroot": "", action: "/admin/products", method: "POST" },
                _react2.default.createElement(
                    "div",
                    { className: "row form-group" },
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "First Name"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "f_name"
                        })
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "Last Name"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "l_name"
                        })
                    )
                ),
                _react2.default.createElement(
                    "div",
                    { className: "form-group row" },
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "Address"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "address"
                        })
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "Address 2"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "address_2"
                        })
                    )
                ),
                _react2.default.createElement(
                    "div",
                    { className: "form-group row" },
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-3" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "City"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "city"
                        })
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-3" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "State"
                        ),
                        _react2.default.createElement(
                            "select",
                            { className: "form-control", name: "state" },
                            _react2.default.createElement(
                                "option",
                                { value: "AL" },
                                "Alabama"
                            ),
                            _react2.default.createElement(
                                "option",
                                { value: "WY" },
                                "Wyoming"
                            )
                        )
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { className: "col-form-label" },
                            "Country"
                        ),
                        _react2.default.createElement(
                            "select",
                            { className: "form-control", name: "country" },
                            _react2.default.createElement(
                                "option",
                                { value: "AF" },
                                "Afghanistan"
                            ),
                            _react2.default.createElement(
                                "option",
                                { value: "ZW" },
                                "Zimbabwe"
                            )
                        )
                    )
                ),
                _react2.default.createElement(
                    "div",
                    { className: "form-group row" },
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { className: "col-form-label" },
                            "ZipCode"
                        ),
                        _react2.default.createElement("input", {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "zipcode"
                        })
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { className: "col-form-label" },
                            "Payment Type"
                        ),
                        _react2.default.createElement(
                            "select",
                            { className: "form-control", name: "payment_type" },
                            _react2.default.createElement(
                                "option",
                                { value: "paypal" },
                                "Paypal"
                            ),
                            _react2.default.createElement(
                                "option",
                                { value: "credit_card" },
                                "Credit Card"
                            )
                        )
                    )
                ),
                _react2.default.createElement(
                    "div",
                    { className: "row order-items" },
                    _react2.default.createElement(
                        "div",
                        { className: "col-md-12" },
                        _react2.default.createElement(
                            "h2",
                            null,
                            "Order Items"
                        )
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-md-4" },
                        _react2.default.createElement(
                            "div",
                            { className: "item-box" },
                            _react2.default.createElement(
                                "div",
                                { className: "add-item-button" },
                                _react2.default.createElement(
                                    "span",
                                    null,
                                    "+"
                                ),
                                "Add new Item"
                            )
                        )
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "popup" },
                        _react2.default.createElement(
                            "div",
                            { className: "container-box" },
                            _react2.default.createElement(
                                "div",
                                { className: "row" },
                                _react2.default.createElement(
                                    "div",
                                    { className: "col-md-12" },
                                    _react2.default.createElement(
                                        "h2",
                                        null,
                                        "Add Item to Order"
                                    ),
                                    _react2.default.createElement(
                                        "div",
                                        { className: "form-group" },
                                        _react2.default.createElement(
                                            "label",
                                            { htmlFor: "" },
                                            "Product"
                                        ),
                                        _react2.default.createElement(
                                            "select",
                                            {
                                                className: "custom-select",
                                                name: "product"
                                            },
                                            _react2.default.createElement(
                                                "option",
                                                { value: "none" },
                                                "Select Sneaker"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "1" },
                                                "Jordan Sneaker Yeezy red"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "3" },
                                                "Jordan Sneaker Yeezy white"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "4" },
                                                "Jordan Sneaker Yeezy white"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "11" },
                                                "Jordan Air Jordan 1 High OG"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "12" },
                                                "Adidas Yeezy Boost 350 V2 Reflective"
                                            )
                                        )
                                    ),
                                    _react2.default.createElement(
                                        "div",
                                        { className: "form-group" },
                                        _react2.default.createElement(
                                            "label",
                                            { htmlFor: "" },
                                            "Quantity"
                                        ),
                                        _react2.default.createElement(
                                            "select",
                                            {
                                                className: "custom-select",
                                                name: "qty"
                                            },
                                            _react2.default.createElement(
                                                "option",
                                                { value: "1" },
                                                "1"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "2" },
                                                "2"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "3" },
                                                "3"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "4" },
                                                "4"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "5" },
                                                "5"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "6" },
                                                "6"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "7" },
                                                "7"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "8" },
                                                "8"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "9" },
                                                "9"
                                            ),
                                            _react2.default.createElement(
                                                "option",
                                                { value: "10" },
                                                "10"
                                            )
                                        )
                                    ),
                                    _react2.default.createElement(
                                        "div",
                                        { className: "add-btn btn btn-primary mb-3" },
                                        "save item"
                                    ),
                                    _react2.default.createElement(
                                        "div",
                                        { className: "add-btn  btn btn-danger mb-3" },
                                        "cancel"
                                    )
                                )
                            )
                        )
                    )
                ),
                _react2.default.createElement(
                    "div",
                    { className: "form-group" },
                    _react2.default.createElement(
                        "div",
                        { className: "btn btn-primary mb-3" },
                        "Add Product"
                    )
                )
            );
        }
    }]);

    return Layout;
}(_react.Component);

var ordersForm = document.getElementById("ordersForm");

_reactDom2.default.render(_react2.default.createElement(Layout, null), ordersForm);

/***/ })

},[233]);