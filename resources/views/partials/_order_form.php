<div class="panel-body" id="app">
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
            <tbody class="order">
                <tr>
                    <input type="hidden" name="rows[]"/>
                    <td>
                        1
                    </td>
                    <td>
                        <input class="form-control" name="product[]" value="1"/>
                    </td>
                    <td>
                        <input class="form-control" name="qty[]" value="5" number/>
                    </td>
                    <td>
                        <input class="form-control text-right" name="price[]" value="200" number/>
                    </td>
                    <td>
                        <select class="form-control" name="vat[]">
                            <option value="0">0%</option>
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                        </select>
                    </td>
                    <td>
                        <input class="form-control text-right" name="row_total_price[]" value="1000" number readonly />
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-xs"> + </a>
                        <a href="#" class="btn btn-danger btn-xs"> - </a>
                    </td>
                </tr>
                <tr>
                    <input type="hidden" name="rows[]"/>
                    <td>
                        2
                    </td>
                    <td>
                        <input class="form-control" name="product[]" value="1"/>
                    </td>
                    <td>
                        <input class="form-control" name="qty[]" value="2" number/>
                    </td>
                    <td>
                        <input class="form-control text-right" name="price[]" value="200" number/>
                    </td>
                    <td>
                        <select class="form-control" name="vat[]">
                            <option value="0">0%</option>
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                        </select>
                    </td>
                    <td>
                        <input class="form-control text-right" name="row_total_price[]" value="400" number readonly />
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-xs"> + </a>
                        <a href="#" class="btn btn-danger btn-xs"> - </a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right" style="vertical-align: middle">TAX</td>
                    <td colspan="1" class="text-right"><input class="form-control text-right" name="grandtotal_vat" value="0" number/></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right" style="vertical-align: middle">TOTAL</td>
                    <td colspan="1" class="text-right"><input class="form-control text-right" name="total" value="0" number/></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right" style="vertical-align: middle">DELIVERY</td>
                    <td colspan="1" class="text-right"><input class="form-control text-right" name="delivery" value="0" number/></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right" style="vertical-align: middle"><strong>GRANDTOTAL</strong></td>
                    <td colspan="1" class="text-right"><strong><input class="form-control text-right" name="grandtotal" value="1400" number/></strong></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
