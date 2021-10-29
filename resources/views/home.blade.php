@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                </div>
                @endif --}}

                <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/4f8e17eb-e65e-4d4c-adde-76d1057e7c9a"></iframe>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
