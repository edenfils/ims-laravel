import React, { Component} from "react";
import ReactDOM from "react-dom";
import update from "react-addons-update";
import countries from 'country-list';
import Modal from './Modal';
import axios from 'axios';
var UsaStates = require('usa-states').UsaStates;

class Layout extends Component {
    state = {

        form : {
          f_name: '',
          l_name: '',
          address: '',
          address_2: '',
          city: 'NY',
          country: 'USA',
          payment_type: 'paypal',
          zipcode: ''
        },
        showModal: false,
        allProducts: '',
        allItems: []

    };

    constructor() {
        super();
        this.submitForm = this.submitForm.bind(this)
    }
    
    


    componentDidMount() {
        const self = this
        self.getAllProducts()
    }

    showModal = () => {
        this.setState({
            showModal: !this.state.showModal
        })
    }



  // keep track of the input fileds and update the state
    change = (event) => {
      let name = event.target.name
      let value = (event.target.type === 'checkbox') ? event.target.checked : event.target.value

      let currentState = this.state

      let newState = update(currentState, {
              form : {
                  $merge: {
                    [name] : value
                  }
              }
      })

      this.setState(newState, () => {
        console.log(this.state)
      })
    }


    showStates = () => {

        let usStates = new UsaStates();
        return usStates.states.map((item, i) => {
            return (
                <option value={item.abbreviation} key={i}>
                    {item.name}
                </option>

            )
            
        })
    }

    showCountries = () => {
        let allCountries = countries.getData();
        return allCountries.map((item, i) => {
            return (
                <option value={item.code} key={i}>
                    {item.name}
                </option>
            )
        })
    }


    async getAllProducts() {
        try {
            let allProducts = await axios.get('/api/admin/products')
            allProducts = allProducts.data
            console.log(allProducts)
            this.setState({
                allProducts
            }, () => {
                console.log(this.state)
            })
        } catch (error) {
            console.log(error)
        }
    }


    addItemToList = item => {
        let allItems = this.state.allItems
        let oldState = this.state

        let newState = update(oldState, {
            allItems:  {$push: [item]}
        })

        this.setState(newState, () => {
            console.log('New State')
            console.log(this.state)
        })
    }

    showAllItems =  () => {
        return this.state.allItems.map((item,i) => {
            return (
                <div className="col-md-4" key={i}>
                    <div className="item-box mb-0">
                        <div 
                            className="item-img" 
                            style={{
                                background: `url('${item.productInfo.img_url}')`
                            }}
                        >
                            <div className="item-delete" onClick={this.removeItem.bind(null,i)}>
                                <i className="ti-close"/>
                            </div>
                        </div>
                        <div className="title">{item.productInfo.title}</div>
                        <div className="quantity">
            <label className="col-form-label">Quantity</label>
                            <h4>{item.qtyBuying}</h4>
                        </div>
                    </div>
                </div>
            )
        })
    }

    removeItem = (index) => {
        let oldState  = this.state
        let newState = update(oldState, {
            allItems: {
                $splice: [[index, 1]]
            }
        })
        this.setState(newState)
    }

    submitForm() {

        /*window.axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }*/

        const token = document.head.querySelector('meta[name="csrf-token"]');
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;


        axios.post('/api/admin/orders', {
                _token: token.content,
                form: this.state.form,
                allItems: this.state.allItems
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });

       
    }




    
    

    render() {
        return (
            <div>
                <div className="row form-group">
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            First Name
                        </label>
                        <input
                            type="text"
                            value={this.state.form.f_name}
                            className="form-control"
                            id="example-text-input"
                            name="f_name"
                            onChange={this.change}
                        />
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label htmlFor="example-text-input" className="col-form-label">
                            Last Name
                        </label>
                        <input
                            type="text"
                            className="form-control"
                            id="example-text-input"
                            name="l_name"
                            value={this.state.form.l_name}
                            onChange={this.change}
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
                            value={this.state.form.address}
                            onChange={this.change}
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
                            value={this.state.form.address_2}
                            onChange={this.change}
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
                            value={this.state.form.city}
                            onChange={this.change}
                        />
                    </div>
                    <div className="col-sm-12 col-md-3">
                        <label htmlFor="example-text-input" className="col-form-label">
                            State
                        </label>
                        <select className="form-control" name="state" 
                        onChange={this.change}>
                            {this.showStates()}
                        </select>
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label className="col-form-label">Country</label>
                        <select className="form-control" name="country" onChange={this.change}>
                            {this.showCountries()}
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
                            value={this.state.form.zipcode}
                            onChange={this.change}
                        />
                    </div>
                    <div className="col-sm-12 col-md-6">
                        <label className="col-form-label">Payment Type</label>
                        <select className="form-control" name="payment_type" onChange={this.change}>
                            <option value="paypal">Paypal</option>
                            <option value="credit_card">Credit Card</option>
                        </select>
                    </div>
                </div>
                <div className="row order-items">
                    <div className="col-md-12 mb-0">
                        <h2>Order Items</h2>
                        <div className="row">
                            {this.showAllItems()}
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="item-box">
                            <div className="add-item-button" onClick={this.showModal}>
                                <span>+</span>
                                Add new Item
                            </div>
                        </div>
                    </div>
                    <Modal showModal={this.state.showModal} closeModal={this.showModal} allProducts={this.state.allProducts} addItemToList={this.addItemToList}/>
                </div>
                <div className="form-group">
                    <div  className="btn btn-primary mb-3" onClick={this.submitForm} >Add Order</div>
                </div>
            </div>
        );
    }
}

const ordersForm = document.getElementById("ordersForm");

ReactDOM.render(<Layout />, ordersForm);
