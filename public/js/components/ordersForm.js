webpackJsonp([0],{

/***/ 231:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = __webpack_require__(76);

var _react2 = _interopRequireDefault(_react);

var _reactAddonsUpdate = __webpack_require__(150);

var _reactAddonsUpdate2 = _interopRequireDefault(_reactAddonsUpdate);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var Modal = function (_Component) {
    _inherits(Modal, _Component);

    function Modal() {
        var _ref;

        var _temp, _this, _ret;

        _classCallCheck(this, Modal);

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
        }

        return _ret = (_temp = (_this = _possibleConstructorReturn(this, (_ref = Modal.__proto__ || Object.getPrototypeOf(Modal)).call.apply(_ref, [this].concat(args))), _this), _this.state = {
            modalForm: {
                product: '',
                qty: 1
            }
        }, _this.change = function (event) {
            var name = event.target.name;
            var value = event.target.type === 'checkbox' ? event.target.checked : event.target.value;

            var currentState = _this.state;

            var newState = (0, _reactAddonsUpdate2.default)(currentState, {
                modalForm: {
                    $merge: _defineProperty({}, name, value)
                }
            });

            _this.setState(newState, function () {
                console.log(_this.state);
            });
        }, _this.cancelBtn = function () {
            _this.props.closeModal();
        }, _temp), _possibleConstructorReturn(_this, _ret);
    }

    // keep track of the input fileds and update the state


    _createClass(Modal, [{
        key: "render",
        value: function render() {
            return _react2.default.createElement(
                "div",
                { className: "popup " + (this.props.showModal === true ? 'active' : '') },
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
                                        name: "product",
                                        value: this.state.modalForm.product,
                                        onChange: this.change
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
                                        name: "qty",
                                        value: this.state.modalForm.qty,
                                        onChange: this.change
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
                                { className: "add-btn  btn btn-danger mb-3", onClick: this.cancelBtn },
                                "cancel"
                            )
                        )
                    )
                )
            );
        }
    }]);

    return Modal;
}(_react.Component);

exports.default = Modal;

/***/ }),

/***/ 237:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _react = __webpack_require__(76);

var _react2 = _interopRequireDefault(_react);

var _reactDom = __webpack_require__(101);

var _reactDom2 = _interopRequireDefault(_reactDom);

var _reactAddonsUpdate = __webpack_require__(150);

var _reactAddonsUpdate2 = _interopRequireDefault(_reactAddonsUpdate);

var _countryList = __webpack_require__(233);

var _countryList2 = _interopRequireDefault(_countryList);

var _Modal = __webpack_require__(231);

var _Modal2 = _interopRequireDefault(_Modal);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var UsaStates = __webpack_require__(235).UsaStates;

var Layout = function (_Component) {
    _inherits(Layout, _Component);

    function Layout() {
        var _ref;

        var _temp, _this, _ret;

        _classCallCheck(this, Layout);

        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
        }

        return _ret = (_temp = (_this = _possibleConstructorReturn(this, (_ref = Layout.__proto__ || Object.getPrototypeOf(Layout)).call.apply(_ref, [this].concat(args))), _this), _this.state = {

            form: {
                f_name: '',
                l_name: '',
                address: '',
                address_2: '',
                city: 'NY',
                country: 'USA',
                payment_type: 'paypal',
                zipcode: ''
            },
            showModal: false

        }, _this.showModal = function () {
            _this.setState({
                showModal: !_this.state.showModal
            });
        }, _this.change = function (event) {
            var name = event.target.name;
            var value = event.target.type === 'checkbox' ? event.target.checked : event.target.value;

            var currentState = _this.state;

            var newState = (0, _reactAddonsUpdate2.default)(currentState, {
                form: {
                    $merge: _defineProperty({}, name, value)
                }
            });

            _this.setState(newState, function () {
                console.log(_this.state);
            });
        }, _this.showStates = function () {

            var usStates = new UsaStates();
            return usStates.states.map(function (item, i) {
                return _react2.default.createElement(
                    "option",
                    { value: item.abbreviation, key: i },
                    item.name
                );
            });
        }, _this.showCountries = function () {
            var allCountries = _countryList2.default.getData();
            return allCountries.map(function (item, i) {
                return _react2.default.createElement(
                    "option",
                    { value: item.code, key: i },
                    item.name
                );
            });
        }, _temp), _possibleConstructorReturn(_this, _ret);
    }

    // keep track of the input fileds and update the state


    _createClass(Layout, [{
        key: "render",
        value: function render() {
            var _React$createElement, _React$createElement2, _React$createElement3, _React$createElement4;

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
                            value: this.state.form.f_name,
                            className: "form-control",
                            id: "example-text-input",
                            name: "f_name",
                            onChange: this.change
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
                            className: "form-control",
                            id: "example-text-input",
                            name: "l_name",
                            value: this.state.form.l_name,
                            onChange: this.change
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
                        _react2.default.createElement("input", (_React$createElement = {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "address"
                        }, _defineProperty(_React$createElement, "value", this.state.form.address), _defineProperty(_React$createElement, "onChange", this.change), _React$createElement))
                    ),
                    _react2.default.createElement(
                        "div",
                        { className: "col-sm-12 col-md-6" },
                        _react2.default.createElement(
                            "label",
                            { htmlFor: "example-text-input", className: "col-form-label" },
                            "Address 2"
                        ),
                        _react2.default.createElement("input", (_React$createElement2 = {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "address_2"
                        }, _defineProperty(_React$createElement2, "value", this.state.form.address_2), _defineProperty(_React$createElement2, "onChange", this.change), _React$createElement2))
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
                        _react2.default.createElement("input", (_React$createElement3 = {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "city"
                        }, _defineProperty(_React$createElement3, "value", this.state.form.city), _defineProperty(_React$createElement3, "onChange", this.change), _React$createElement3))
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
                            { className: "form-control", name: "state",
                                onChange: this.change },
                            this.showStates()
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
                            { className: "form-control", name: "country", onChange: this.change },
                            this.showCountries()
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
                        _react2.default.createElement("input", (_React$createElement4 = {
                            type: "text",
                            value: "",
                            className: "form-control",
                            id: "example-text-input",
                            name: "zipcode"
                        }, _defineProperty(_React$createElement4, "value", this.state.form.zipcode), _defineProperty(_React$createElement4, "onChange", this.change), _React$createElement4))
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
                            { className: "form-control", name: "payment_type", onChange: this.change },
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
                                { className: "add-item-button", onClick: this.showModal },
                                _react2.default.createElement(
                                    "span",
                                    null,
                                    "+"
                                ),
                                "Add new Item"
                            )
                        )
                    ),
                    _react2.default.createElement(_Modal2.default, { showModal: this.state.showModal, closeModal: this.showModal })
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

},[237]);