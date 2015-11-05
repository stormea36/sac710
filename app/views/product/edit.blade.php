@extends('layout')

{{--section has the nav above and the body tag below--}}
{{--consider adding a container / -fluid tag--}}
@section('content')
<div class="container" ng-controller="ProductController">
    <div class="row">
        <form class="form-horizontal" name="productForm">
            <fieldset>
                <input type="hidden" name="__token" value="{{ csrf_token() }}" />
            <div class="row">
                <h1>Create a new product <small>Using Angular</small> & <small ng-bind="newProductname"></small></h1>
                <hr/>
                <div class="col-lg-6">
                    {{--product name--}}
                    <div class="form-group">
                        <label for="productName" class="control-label col-sm-2">Product Name</label>
                        <input id="productName" type="text" required ng-model="newProduct.name" class="col-sm-10" />
                    </div>
                    {{--product description--}}
                    <div class="form-group">
                        <label for="productDesc" class="control-label col-sm-2">Product Description</label>
                        <textarea id="productName" required ng-model="newProduct.description" class="form-inline col-sm-10"></textarea>
                    </div>
                    {{--product type--}}
                    <div class="form-group">
                        <label for="productType" class="control-label col-sm-2">Product Type</label>
                        <select id="productType" required ng-model="newProduct.type" class="input-sm col-sm-3">
                            <option selected value="indica">Indica</option>
                            <option value="sativa">Sativa</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="edible">Edible</option>
                            <option value="gear">Gear</option>
                        </select>
                    </div>
                    {{--product active--}}
                    <div class="form-group">
                        <label for="productActive" class="control-label col-sm-2">Active:</label>
                        <select id="productActive" required ng-model="newProduct.active" class="input-sm col-sm-3">
                            <option selected value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                    {{--button controls--}}
                    <input type="button" ng-click="save()" ng-disabled="productForm.$invalid" class="btn btn-primary" value="Save">
                    <input type="button" class="btn btn-warning" value="Cancel">
                </div>
                <div class="col-lg-6">
                {{--section for prices--}}
                    <p>Switch the price format: <input type="button" ng-click="switchPrice()" class="btn btn-sm btn-info" value="switch"/></p>
                <div id="singlePrice" ng-show="priceFormat===1">
                    <div class="form-group">
                        <label for="productPrice-ounce" class="control-label col-sm-3">Single Price::<%priceValue[0].value%></label>
                        <input id="productPrice-ounce" type="text" ng-model="priceValue[0].value" class="col-sm-4" />
                    </div>
                </div>
                <div id="weightPrice" ng-show="priceFormat===2">
                    <div class="form-group">
                        <label for="productPrice-gram" class="control-label col-sm-3">Gram:</label>
                        <input id="productPrice-gram" type="text" ng-model="newProductprices.gram" class="col-sm-4" />
                    </div>
                    <div class="form-group">
                        <label for="productPrice-eighth" class="control-label col-sm-3">1/8th:</label>
                        <input id="productPrice-eighth" type="text" ng-model="newProductprices.eighth" class="col-sm-4" />
                    </div>
                    <div class="form-group">
                        <label for="productPrice-quarter" class="control-label col-sm-3">1/4:</label>
                        <input id="productPrice-quarter" type="text" ng-model="newProductprices.quarter" class="col-sm-4" />
                    </div>
                    <div class="form-group">
                        <label for="productPrice-half" class="control-label col-sm-3">1/2:</label>
                        <input id="productPrice-half" type="text" ng-model="newProductprices.half" class="col-sm-4" />
                    </div>
                    <div class="form-group">
                        <label for="productPrice-single" class="control-label col-sm-3">Ounce:</label>
                        <input id="productPrice-single" type="text" ng-model="newProductprices.ounce" class="col-sm-4" />
                    </div>
                </div>

            </div>
            </div>
            </fieldset>
        </form>
    </div>

</div>
@stop