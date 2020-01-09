import React, { Component } from "react";
import update from "react-addons-update";

export default class Modal extends Component {
    state = {
        modalForm: {
            product:'',
            qty: 1,
            productQty: '',
        }
    };



    cancelBtn = () => {
        this.props.closeModal()
    }

  // keep track of the input fileds and update the state
    change = (event) => {
      let self = this

      let name = event.target.name

      let value = (event.target.type === 'checkbox') ? event.target.checked: event.target.value

      let currentState = self.state

      let newState = ''

      if (name == 'product' && value != 'none') {
        let productQty = self.props.allProducts.filter((item) => {
            return item.id == value
        })

        productQty = productQty[0].qty
        console.log(productQty)

        newState = update(currentState, {
              modalForm : {
                  $merge: {
                    [name] : value,
                    productQty: productQty
                  }
              }
        } , () => console.log(self.state))
      } else {
            newState = update(currentState, {
                modalForm : {
                    $merge: {
                    [name] : value
                    }
                }
            })
        }

      
      self.setState(newState, () => {
        console.log(self.state)
      })
    }

    

    showQty = () => {
        let options = []

        let number = 0

       

        if (this.state.modalForm.productQty >= 11) {
            number = 10
        } else {
            number = this.state.modalForm.productQty
        }

        if (this.state.modalForm.product == 'none') {
            return (<option value={`none`}>Please choose a product that is available</option>)
        }

        if (this.state.modalForm.productQty != 0 || this.state.modalForm.productQty != 'none') {
            for ( var i = 1; i <= number; i++) {
                options.push(i)
            }
    
            return options.map( (item, j) => {
                return (<option value={`${item}`} key={j}>
                    {item}
                </option>)
            })

        }
        
        else {
            return (<option value={`none`}>Please choose a product that is available</option>)
        }

        
       
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

    saveItemBtn = () => {
        let product = this.props.allProducts.filter((product) => 
            product.id == this.state.modalForm.product
        )
        let itemData = {
            productInfo: product[0],
            qtyBuying: this.state.modalForm.qty
        }

        this.props.addItemToList(itemData)
        this.props.closeModal();
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
                                            <option value="none">Select Product</option>
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
                                             
                                            {this.showQty()}
                                             
                                        </select>
                                    </div>
                                    <div className="add-btn btn btn-primary mb-3" onClick={this.saveItemBtn}>
                                        Save item
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


