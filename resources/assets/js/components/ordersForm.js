import React, { Component } from "react";
import ReactDOM from "react-dom";

class Layout extends Component {
    state = {};


    render() {
        return (
            <form data-reactroot="" action="/admin/products" method="POST">
                <div className="row form-group">
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            First Name
                        </label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="f_name"
                        />
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            Last Name
                        </label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="l_name"
                        />
                    </div>
                </div>
                <div className="form-group row">
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            Address
                        </label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="address"
                        />
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            Address 2
                        </label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="address_2"
                        />
                    </div>
                </div>
                <div className="form-group row">
                    <div className="col-sm-12 col-md-3">
                        <label htmlFor="example-text-input" className="col-form-label">
                            City
                        </label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="city"
                        />
                    </div>
                    <div className="col-sm-12 col-md-3">
                        <label htmlFor="example-text-input" className="col-form-label">
                            State
                        </label>
                        <select className="form-control" name="state">
                            <option value="AL">Alabama</option>

                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label className="col-form-label">Country</label>
                        <select className="form-control" name="country">
                            <option value="AF">Afghanistan</option>

                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>
                </div>
                <div className="form-group row">
                    <div className="col-sm-12 col-md-6">
                        <label className="col-form-label">ZipCode</label>
                        <input
                            type="text"
                            value=""
                            className="form-control"
                            id="example-text-input"
                            name="zipcode"
                        />
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label className="col-form-label">Payment Type</label>
                        <select className="form-control" name="payment_type">
                            <option value="paypal">Paypal</option>
                            <option value="credit_card">Credit Card</option>
                        </select>
                    </div>
                </div>
                <div className="row order-items">
                    <div className="col-md-12">
                        <h2>Order Items</h2>
                    </div>
                    <div className="col-md-4">
                        <div className="item-box">
                            <div className="add-item-button">
                                <span>+</span>
                                Add new Item
                            </div>
                        </div>
                    </div>
                    <div className="popup">
                        <div className="container-box">
                            <div className="row">
                                <div className="col-md-12">
                                    <h2>Add Item to Order</h2>
                                    <div className="form-group">
                                        <label htmlFor="">Product</label>
                                        <select
                                            className="custom-select"
                                            name="product"
                                        >
                                            <option value="none">
                                                Select Sneaker
                                            </option>
                                            <option value="1">
                                                Jordan Sneaker Yeezy red
                                            </option>
                                            <option value="3">
                                                Jordan Sneaker Yeezy white
                                            </option>
                                            <option value="4">
                                                Jordan Sneaker Yeezy white
                                            </option>
                                            <option value="11">
                                                Jordan Air Jordan 1 High OG
                                            </option>
                                            <option value="12">
                                                Adidas Yeezy Boost 350 V2
                                                Reflective
                                            </option>
                                        </select>
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="">Quantity</label>
                                        <select
                                            className="custom-select"
                                            name="qty"
                                        >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div className="add-btn btn btn-primary mb-3">
                                        save item
                                    </div>
                                    <div className="add-btn  btn btn-danger mb-3">
                                        cancel
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="form-group">
                    <div className="btn btn-primary mb-3">Add Product</div>
                </div>
            </form>
        );
    }
}

const ordersForm = document.getElementById("ordersForm");

ReactDOM.render(<Layout />, ordersForm);
