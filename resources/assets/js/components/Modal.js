import React, { Component } from "react";
import update from "react-addons-update";

export default class Modal extends Component {
    state = {
        modalForm: {
            product: '',
            qty: 1
        }
    };



  // keep track of the input fileds and update the state
    change = (event) => {
      let name = event.target.name
      let value = (event.target.type === 'checkbox') ? event.target.checked: event.target.value

      let currentState = this.state

      let newState = update(currentState, {
              modalForm : {
                  $merge: {
                    [name] : value
                  }
              }
      })

      this.setState(newState, () => {
        console.log(this.state)
      })
    }

    cancelBtn = () => {
        this.props.closeModal()
    }

    showProducts = () => {
        if(this.props.allProducts != '') {
            return this.props.allProducts.map((item, i) => {
                return (
                    <option value={item.id} key={i}>
                        {item.title}
                    </option>
                )
            })
        }
    }

    render() {
        return (
            <div className={`popup ${this.props.showModal === true ? 'active': ''}`}>
                        <div className="container-box">
                            <div className="row">
                                <div className="col-md-12">
                                    <h2>Add Item to Order</h2>
                                    <div className="form-group">
                                        <label htmlFor="">Product</label>
                                        <select
                                            className="custom-select"
                                            name="product"
                                            value={this.state.modalForm.product}
                                            onChange={this.change}
                                        >
                                           {this.showProducts()}
                                        </select>
                                    </div>
                                    <div className="form-group">
                                        <label htmlFor="">Quantity</label>
                                        <select
                                            className="custom-select"
                                            name="qty"
                                            value={this.state.modalForm.qty}
                                            onChange={this.change}
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
                                    <div className="add-btn  btn btn-danger mb-3" onClick={this.cancelBtn}>
                                        cancel
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        );
    }
}


