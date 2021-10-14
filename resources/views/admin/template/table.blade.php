@extends('admin.template.layout')

@section('title')
    <title>Table</title>
@endsection

@section('breadcrumb')
    <span class="bread-blod">Event</span>
@endsection

@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Events List</h4>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Band Names</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Portfolio</th>
                                    <th>Ticket Price</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->eventName }}</td>
                                        <td>{{ $event->bandNames }}</td>
                                        <td>{{ $event->startDate }}</td>
                                        <td>{{ $event->endDate }}</td>
                                        <td>{{ $event->portfolio }}</td>
                                        <td>{{ $event->ticketPrice }}</td>
                                        <td>{{ $event->status }}</td>
                                        <td>
                                            <a href="/layout/update/{{ $event->eventName }}">
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <a href="/layout/delete/{{ $event->eventName }}">
                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
