@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Supplier Scores</div>

                    <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
@endif

                        You are logged in! -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Individual Scores</th>
                                    <th>Totsl Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $supplierProduct)
                                    <tr>
                                        <td>{{$supplierProduct->product_name}}</td>
                                        <td>
                                            @foreach($supplierProduct->criteriaItems as $value)
                                                <b>{{$value->criteria->criteria_name}}</b>: {{$value->item_name}} (score: {{$value->item_value_percentage}})<br>
                                            @endforeach
                                        </td>
                                        <td>{{$supplierProduct->total_score}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
