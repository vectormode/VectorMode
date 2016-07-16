<div class="panel-body" id="app">
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
                <input class="form-control" v-model="row.description"/>
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
                <a class="btn btn-primary btn-xs" @click="addRow($index)">+</a>
                <a class="btn btn-danger btn-xs" @click="removeRow($index)">-</a>
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
        <input type="hidden" name="name" value="{{ $data | json }}"/>
    </table>
<!--    <button @click="getData()">SUBMIT DATA</button>-->
    <pre>{{ $data | json }}</pre>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success">Submit</button>
        <a href="/orders" class="btn btn-primary">Cancel</a>
    </div>
</div>