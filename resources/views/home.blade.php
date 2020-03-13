@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="favor-header">
                <h2>Your Favorite Car Search</h2>
            </div>
            <div class="card">
                <div class="card-header">Car Type</div>

                <div class="card-body row">
                    <div class="any-check col-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Any</label>

                        <ul>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Car</label>
                            </li>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Light truck</label>
                            </li>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Minibus</label>
                            </li>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Van</label>
                            </li>

                        </ul>
                    </div>
                    <div class="postby-check col-4">
                        <label class="form-check-label" for="exampleCheck1">Veichle posted by</label>

                        <ul>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Dealer</label>
                            </li>
                            <li>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Individual sellers</label>
                            </li>


                        </ul>
                    </div>
                    <div class="ad-check col-4">
                        <label class="form-check-label" for="exampleCheck1">Ad type</label>
                        <ul>
                            <input type="radio" id="for_sale" name="ad_type" value="sale">
                            <label for="for_sale">For sale</label><br>
                            <input type="radio" id="for_sold" name="ad_type" value="sold">
                            <label for="for_sold">sold</label><br>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="model">
                <div class="model-header">
                    <h2>Make & Model</h2>
                    <input type="radio" name="model_get" value="get">Just get these
                    <input type="radio" name="model_get" value="remove">Remove these from the search results
                </div>
                <div class="model-body row">
                    <div class="col-4" id="select_brand">
                        <label for="brand">Select Brand</label>
                    </div>
                    <div class="col-4">
                        <label for="template">Select Template</label>
                    </div>
                    <div class="col-4">
                        <label for="selected_model">Selected brands & models</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function () {
            $.ajax({
                url:'https://api.nettix.fi/rest/car/options/vehicleType',
                method:'get',
                success:function (data) {
                    console.log(data)
                }
            })
        })
    </script>
