@extends('admin.template.layout')

@section('title')
    <title>Form</title>
@endsection

@section('breadcrumb')
    <span class="bread-blod">Event</span>
@endsection
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Event Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="/layout/form" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="eventName" type="text" class="form-control" placeholder="Event Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="bandNames" type="text" class="form-control" placeholder="Band Names">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="startDate" id="finish1" type="text" class="form-control" placeholder="Start Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="endDate" id="finish2" type="text" class="form-control" placeholder="End Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="portfolio" type="text" class="form-control" placeholder="Portfolio">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="ticketPrice" type="number" class="form-control" placeholder="Ticket Price">
                                                            </div>
                                                            <div class="form-group res-mg-t-15">
                                                                <select name="status" class="form-control">
                                                                    <option value="none" selected disabled>Select Status</option>
                                                                    <option value="1">Đang diễn ra</option>
                                                                    <option value="2"> Sắp diễn ra</option>
                                                                    <option value="3">Đã diễn ra</option>
                                                                    <option value="0">Tạm hoãn</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


