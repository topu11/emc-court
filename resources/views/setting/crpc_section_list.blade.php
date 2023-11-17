@extends('layouts.landing')

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-title h2 font-weight-bolder">{{ $page_title }}</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('setting.crpcsection.add') }}" class="btn btn-sm btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>নতুন সেকশন এন্ট্রি
                </a>
            </div>
        </div>
        <div class="card-body">
            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif --}}
            <table class="table table-hover mb-6 font-size-h6">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" width="30">#</th>
                        <th scope="col">সিআরপিসি সেকশন</th>
                        <th scope="col">অভিযোগের ধরণ </th>
                        <th scope="col" width="100">স্ট্যাটাস</th>
                        <th scope="col" width="150">অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($crpc_sections as $row)
                        <?php
                        if ($row->status == 1) {
                            $status = '<span class="label label-inline label-light-primary font-weight-bold">এনাবল</span>';
                        } else {
                            $status = '<span class="label label-inline label-light-primary font-weight-bold">ডিসএবল</span>';
                        }
                        ?>
                        <tr>
                            <td scope="row" class="tg-bn">{{ en2bn($i) }}.</td>
                            <td>{{ en2bn($row->crpc_id) }}</td>
                            <td>{{ $row->crpc_name }}</td>
                            <td><?= $status ?></td>
                            <td>
                                <a href="{{ route('setting.crpcsection.edit', $row->id) }}"
                                    class="btn btn-success btn-shadow btn-sm font-weight-bold pt-1 pb-1">সংশোধন</a>
                            </td>
                        </tr>
                        @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>

        </div>
        <!--end::Card-->
    @endsection

    {{-- Includable CSS Related Page --}}
    @section('styles')
        <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
    @endsection

    {{-- Scripts Section Related Page --}}
    @section('scripts')
        <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('js/pages/crud/datatables/advanced/multiple-controls.js') }}"></script>
        <!--end::Page Scripts-->
    @endsection