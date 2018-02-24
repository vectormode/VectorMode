<div class="panel-body" id="vectormode-order-table">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" name="customer_id" type="text" value="1">
                <input class="form-control" name="customer_name" type="text" value="Khan Mohammad">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" name="customer_phone" type="text" value="01676290850">
                <input class="form-control" name="customer_address" type="text" value="lifjaslfhasl">
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 20px;">No.</th>
                    <th>Description</th>
                    <th style="width: 80px;">Qty</th>
                    <th style="width: 130px;" class="text-right">Price</th>
                    <th style="width: 90px;">Tax</th>
                    <th style="width: 130px;">Total</th>
                    <th style="width: 130px;"></th>
                </tr>
            </thead>
            <tbody v-sortable.tr="rows">
                <tr v-for="row in rows" track-by="$index">
                    <td>
                        {{ $index +1 }}
                    </td>
                    <td>
<!--                        <input class="form-control" v-model="row.description"/>-->
                        <select v-model="row.products" class="form-control">
                            <option v-for="prod in products" data-price="{{prod.retail_price}}" :value="prod.product_id">{{prod.product_details.name}}</option>
                        </select>
                    </td>
                    <td>
                        <input class="form-control" v-model="row.qty" number/>
                    </td>
                    <td>
                        <input class="form-control text-right" v-model="row.price | currencyDisplay" number data-type="currency"/>
                    </td>
                    <td>
                        <select class="form-control" v-model="row.tax">
                            <option value="0">0%</option>
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                        </select>
                    </td>
                    <td>
                        <input class="form-control text-right" :value="row.qty * row.price | currencyDisplay" v-model="row.total | currencyDisplay" number readonly />
                        <input type="hidden" :value="row.qty * row.price * row.tax / 100" v-model="row.tax_amount | currencyDisplay" number/>
                    </td>
                    <td>
                        <button class="btn btn-primary btn-xs" @click="addRow()">+</button>
                        <button class="btn btn-danger btn-xs" @click="removeRow(row)">-</button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">TAX</td>
                    <td colspan="1" class="text-right">{{ taxtotal | currencyDisplay }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">TOTAL</td>
                    <td colspan="1" class="text-right">{{ total | currencyDisplay }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">DELIVERY</td>
                    <td colspan="1" class="text-right"><input class="form-control text-right" v-model="delivery | currencyDisplay" number/></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right"><strong>GRANDTOTAL</strong></td>
                    <td colspan="1" class="text-right"><strong>{{ grandtotal = total + delivery | currencyDisplay }}</strong></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
