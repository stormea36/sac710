@extends('layout')

{{--section has the nav above and the body tag below--}}
{{--consider adding a container / -fluid tag--}}
@section('content')
<div class="container">
    <div class="row">
        <form class="form-horizontal">
            <fieldset>
            <div class="row">
                <h1>Create a new product <small>Using Angular</small></h1>
                <hr/>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="productName" class="control-label col-sm-2">Product Name</label>
                        <input id="productName" type="text" ng-model="product.name" class="col-sm-10" />
                    </div>
                    <div class="form-group">
                        <label for="productDesc" class="control-label col-sm-2">Product Description</label>
                        <textarea id="productName" ng-model="product.description" class="form-inline col-sm-10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productType" class="control-label col-sm-2">Product Type</label>
                        <select id="productType" ng-model="product.type" class="input-sm col-sm-3">
                            <option selected value="indica">Indica</option>
                            <option value="sativa">Sativa</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="edible">Edible</option>
                            <option value="gear">Gear</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productActive" class="control-label col-sm-2">Active:</label>
                        <select id="productActive" ng-model="product.active" class="input-sm col-sm-3">
                            <option selected value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                    <input type="button" class="btn btn-primary" value="Save">
                    <input type="button" class="btn btn-warning" value="Cancel">
                </div>
                <div class="col-lg-6">
                {{--section for prices--}}
                <div class="form-group">
                    <label for="productPrice-gram" class="control-label col-sm-3">Gram:</label>
                    <input id="productPrice-gram" type="text" ng-model="product.gram" class="col-sm-4" />
                </div>
                <div class="form-group">
                        <label for="productPrice-eighth" class="control-label col-sm-3">1/8th:</label>
                        <input id="productPrice-eighth" type="text" ng-model="product.eighth" class="col-sm-4" />
                </div>
                <div class="form-group">
                    <label for="productPrice-quarter" class="control-label col-sm-3">1/4:</label>
                    <input id="productPrice-quarter" type="text" ng-model="product.quarter" class="col-sm-4" />
                </div>
                <div class="form-group">
                    <label for="productPrice-half" class="control-label col-sm-3">1/2:</label>
                    <input id="productPrice-half" type="text" ng-model="product.half" class="col-sm-4" />
                </div>
                <div class="form-group">
                    <label for="productPrice-ounce" class="control-label col-sm-3">Ounce:</label>
                    <input id="productPrice-ounce" type="text" ng-model="product.ounce" class="col-sm-4" />
                </div>
            </div>
            </div>
            </fieldset>
        </form>
    </div>

</div>
@stop