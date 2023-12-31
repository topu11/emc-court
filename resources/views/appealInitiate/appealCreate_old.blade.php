@extends('layouts.landing')

@section('content')
    <!--begin::Row-->
    <div class="row">

        <div class="col-md-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title h2 font-weight-bolder">{{ $page_title }}</h3>
                    <div class="card-toolbar">
                        <!-- <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="loadersmall"></div> -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--begin::Form-->
                <form id="appealCase" action="{{ route('appeal.store') }}" class="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-8 ">
                            <div class="col-md-12">
                                <div class="example-preview">
                                    <ul class="nav nav-pills nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="regTab0" data-toggle="tab" href="#regTab_0">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">অভিযোগের তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab1" data-toggle="tab" href="#regTab_1">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">আবেদনকারীর তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab2" data-toggle="tab" href="#regTab_2">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">ঋণগ্রহীতার তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab3" data-toggle="tab" href="#regTab_3">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">জামানতকারীর তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab4" data-toggle="tab" href="#regTab_4">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">আইনজীবীর তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab5" data-toggle="tab" href="#regTab_5">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">উত্তরাধিকারীর তথ্য</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="regTab6" data-toggle="tab" href="#regTab_6">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">পুলিশের তথ্য</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="tab-content mt-5" id="myTabContent4">
                                        <div role="tabpanel" aria-labelledby="regTab0" class="tab-pane fade show active"
                                            id="regTab_0">
                                            <div class="panel panel-info radius-none">
                                                <div class="panel-body">
                                                    <div class="clearfix">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="caseEntryType" class="control-label"> মামলার ধরন </label>
                                                                    <div class="radio">
                                                                        <label class="mr-5">
                                                                            <input type="radio" id="new" class="caseEntryType mr-2" value="NEW" checked
                                                                                name="caseEntryType">নতুন মামলা
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" id="oldCaseRadio" class="caseEntryType  mr-2"
                                                                                value="OLD" name="caseEntryType">পুরাতন মামলা
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 d-none" id="prevCaseDiv">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label for="previouscaseNo" class="control-label">পূর্ববর্তী মামলা
                                                                            নম্বর</label>
                                                                        <input type="text" name="previouscaseNo" id="previouscaseNo"
                                                                            class="form-control form-control-sm" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="caseNo" class="control-label">মামলা নম্বর</label>
                                                                    <div name="caseNo" id="caseNo" class="form-control form-control-sm">সিস্টেম কর্তৃক পূরণকৃত </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>আবেদনের তারিখ <span class="text-danger">*</span></label>
                                                                    <input type="text" name="caseDate" id="case_date" class="form-control form-control-sm common_datepicker" placeholder="দিন/মাস/তারিখ" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="lawSection" class="control-label">সংশ্লিষ্ট আইন ও ধারা</label>
                                                                    <input name="lawSection" id="lawSection" class="form-control form-control-sm"
                                                                        value="সরকারি পাওনা আদায় আইন, ১৯১৩ এর ৫ ধারা">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="totalLoanAmount" class="control-label"><span style="color:#FF0000">*
                                                                        </span>দাবিকৃত অর্থের পরিমাণ</label>
                                                                    <input type="number" name="totalLoanAmount" id="totalLoanAmount"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="totalLoanAmountText" class="control-label">দাবিকৃত অর্থের পরিমাণ
                                                                        (কথায়)</label>
                                                                    <input readonly="readonly" type="text" name="totalLoanAmountText"
                                                                        id="totalLoanAmountText" class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab1" class="tab-pane fade"
                                            id="regTab_1">
                                            <div class="panel panel-info radius-none">
                                                <div style="margin: 10px" id="accordion" role="tablist"
                                                    aria-multiselectable="true" class="panel-group notesDiv">
                                                    <section class="panel panel-primary applicantInfo" id="applicantInfo">

                                                        <div class="accordion accordion-solid accordion-toggle-plus"
                                                            id="accordionExample3">
                                                            <div id="cloneApplicant" class="card">
                                                                <input type="hidden" id="ApplicantCount" value="1">
                                                                <div class="card-header" id="headingOne3">
                                                                    <div class="card-title h4" data-toggle="collapse"
                                                                        data-target="#collapseOne3">
                                                                        আবেদনকারীর তথ্য &nbsp; <span
                                                                            id="spannCount">(1)</span>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseOne3" class="collapse show"
                                                                    data-parent="#accordionExample3">
                                                                    <div class="card-body">
                                                                        <div class="clearfix">
                                                                            <div class="row">
                                                                                {{-- <div class="col-md-12">
                                                                                    <span style="color: rebeccapurple">আবেদনকারীর নাম/পদবী দু’টি
                                                                                        ফিল্ডের যেকোন একটি পূরণীয় বাধ্যতামূলক।</span>
                                                                                    <span style="color:#FF0000">*</span>
                                                                                </div> --}}
                                                                                <div class="col-md-12">
                                                                                    <div class="text-dark font-weight-bold h4">
                                                                                    <label for="">নাগরিক সন্ধান করুন </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input required type="text" id="applicantCiNID_1" class="form-control" placeholder="Enter NID No." name="applicant[ciNID][]">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input required type="text" id="applicantDob_1" name="applicant[dob][]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="button" id="applicantCCheck_1" name="applicant[cCheck][]" onclick="checkNomineeCitizen('applicant', 1)" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_applicant_1"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group" id="applicant_nidPic_1"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantName_1"
                                                                                            class="control-label">আবেদনকারীর নাম</label>
                                                                                        <input name="applicant[name][]" id="applicantName_1"
                                                                                            class="form-control form-control-sm name-group" value="">
                                                                                        <input type="hidden" name="applicant[type][]"
                                                                                            class="form-control form-control-sm" value="1">
                                                                                        <input type="hidden" name="applicant[id][]"
                                                                                            id="applicantId_1" class="form-control form-control-sm" value="">
                                                                                        <input type="hidden" name="applicant[email][]"
                                                                                            id="applicantEmail_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden" name="applicant[thana][]"
                                                                                            id="applicantThana_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden" name="applicant[upazilla][]"
                                                                                            id="applicantUpazilla_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden" name="applicant[age][]"
                                                                                            id="applicantAge_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantDesignation_1"
                                                                                            class="control-label">পদবি</label>
                                                                                        <input name="applicant[designation][]"
                                                                                            id="applicantDesignation_1"
                                                                                            class="form-control form-control-sm name-group" value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantOrganization_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000">*
                                                                                            </span> প্রতিষ্ঠানের নাম</label>
                                                                                        <input name="applicant[organization][]"
                                                                                            id="applicantOrganization_1" class="form-control form-control-sm"
                                                                                            value=""
                                                                                            onchange="appealUiUtils.changeInitialNote();">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantType" class="control-label"><span
                                                                                                style="color:#FF0000">*
                                                                                            </span>প্রতিষ্ঠানের ধরন
                                                                                        </label>
                                                                                        <div class="radio ml-5">
                                                                                            <label>
                                                                                                <input
                                                                                                    id="applicantTypeBank"
                                                                                                    class="applicantType" type="radio"
                                                                                                    name="applicant[Type][]" value="BANK" checked>
                                                                                                <span class="ml-3">
                                                                                                    ব্যাংক
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio  ml-5">
                                                                                            <label>
                                                                                                <input
                                                                                                    id="applicantTypeOther"
                                                                                                    class="applicantType" type="radio"
                                                                                                    name="applicant[Type][]" value="GOVERNMENT">
                                                                                                <span class="ml-3">
                                                                                                    সরকারি প্রতিষ্ঠান
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio  ml-5">
                                                                                            <label>
                                                                                                <input
                                                                                                    id="applicantTypeOther"
                                                                                                    class="applicantType" type="radio"
                                                                                                    name="applicant[Type][]" value="OTHER_COMPANY">
                                                                                                <span class="ml-3">
                                                                                                    স্বায়ত্তশাসিত প্রতিষ্ঠান
                                                                                                </span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantGender_1"
                                                                                            class="control-label">লিঙ্গ</label>
                                                                                        <select style="width: 100%;"
                                                                                            class="selectDropdown form-control form-control-sm"
                                                                                            name="applicant[gender][]" id="applicantGender_1">
                                                                                            <option value="">বাছাই করুন</option>
                                                                                            <option value="MALE">পুরুষ</option>
                                                                                            <option value="FEMALE">নারী</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <input name="applicant[father][]" id="applicantFather_1" type="hidden" class="form-control form-control-sm" value="NOT APPLICABLE"> --}}
                                                                            {{-- <input name="applicant[mother][]" id="applicantMother_1" type="hidden" class="form-control form-control-sm" value="NOT APPLICABLE"> --}}

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantFather_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>পিতার নাম</label>
                                                                                        <input name="applicant[father][]"
                                                                                            id="applicantFather_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantMother_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>মাতার নাম</label>
                                                                                        <input name="applicant[mother][]"
                                                                                            id="applicantMother_1" class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantNid_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>জাতীয় পরিচয়
                                                                                            পত্র</label>
                                                                                        <input name="applicant[nid][]" id="applicantNid_1" class="form-control form-control-sm" value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantPhn_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000">*
                                                                                            </span>মোবাইল</label>
                                                                                        <input name="applicant[phn][]" id="applicantPhn_1"
                                                                                            class="form-control form-control-sm" value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="applicantPresentAddree_1"><span
                                                                                                style="color:#FF0000">*
                                                                                            </span>প্রতিষ্ঠানের ঠিকানা</label>
                                                                                        <textarea id="applicantPresentAddree_1"
                                                                                            name="applicant[presentAddress][]" rows="2"
                                                                                            class="form-control element-block blank"
                                                                                            aria-describedby="note-error"
                                                                                            aria-invalid="false"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>

                                                <div style="text-align: right;margin: 10px;">
                                                    <button type="button" id="RemoveApplicant" class="btn btn-danger">
                                                        বাতিল
                                                    </button>
                                                    <button id="AddApplicant" type="button" class="btn btn-primary">
                                                        আবেদনকারী যোগ করুন
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab2" class="tab-pane fade"
                                            id="regTab_2">
                                            <div class="panel panel-info radius-none">
                                                {{-- <div class="panel-heading radius-none"> --}}
                                                {{-- <h4 class="panel-title">@lang('message.defaulterBlockHeading')</h4> --}}
                                                {{-- </div> --}}
                                                <div class="panel-body">
                                                    <div class="clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-dark font-weight-bold h4">
                                                                <label for="">নাগরিক সন্ধান করুন </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" class="form-control" placeholder="Enter NID No." name="defaulter[ciNID]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" name="defaulter[dob]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="button" name="defaulter[cCheck]" onclick="checkCitizen('defaulter')" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_defaulter"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group" id="defaulter_nidPic">
                                                                    {{-- <img src="{{ asset() }}" alt=""> --}}
                                                                    {{-- <input type="button" name="applicant[cCheck]" onclick="checkCitizen('applicant')" class="btn btn-danger" value="নাগরিকের তথ্য সন্ধান করুন"> <span class="ml-5" id="res_applicant"></span> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterName_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000">*
                                                                        </span>ঋণগ্রহীতার নাম</label>
                                                                    <input name="defaulter[name]" id="defaulterName_1"
                                                                        class="form-control form-control-sm" value=""
                                                                        onchange="appealUiUtils.changeInitialNote()">
                                                                    <input type="hidden" name="defaulter[type]"
                                                                        class="form-control form-control-sm" value="2">
                                                                    <input type="hidden" name="defaulter[id]"
                                                                        id="defaulterId_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="defaulter[email]"
                                                                        id="defaulterEmail_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="defaulter[thana]"
                                                                        id="defaulterThana_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="defaulter[upazilla]"
                                                                        id="defaulterUpazilla_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="defaulter[age]"
                                                                        id="defaulterAge_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterPhn_1"
                                                                        class="control-label">মোবাইল</label>
                                                                    <input name="defaulter[phn]" id="defaulterPhn_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterNid_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>জাতীয় পরিচয়
                                                                        পত্র</label>
                                                                    <input name="defaulter[nid]" id="defaulterNid_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterGender_1"
                                                                        class="control-label">লিঙ্গ</label>
                                                                    <select style="width: 100%;"
                                                                        class="selectDropdown form-control form-control-sm"
                                                                        name="defaulter[gender]" id="defaulterGender_1">
                                                                        <option value="">বাছাই করুন</option>
                                                                        <option value="MALE">পুরুষ</option>
                                                                        <option value="FEMALE">নারী</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterFather_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পিতার নাম</label>
                                                                    <input name="defaulter[father]"
                                                                        id="defaulterFather_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterMother_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>মাতার নাম</label>
                                                                    <input name="defaulter[mother]"
                                                                        id="defaulterMother_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterDesignation_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000">*
                                                                        </span>পদবি / পেশা</label>
                                                                    <input name="defaulter[designation]"
                                                                        id="defaulterDesignation_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="defaulterOrganization_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>প্রতিষ্ঠানের
                                                                        নাম</label>
                                                                    <input name="defaulter[organization]"
                                                                        id="defaulterOrganization_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="defaulterPresentAddree_1"><span
                                                                            style="color:#FF0000">*
                                                                        </span>ঠিকানা</label>
                                                                    <textarea id="defaulterPresentAddree_1"
                                                                        name="defaulter[presentAddress]" rows="2"
                                                                        class="form-control element-block blank"
                                                                        aria-describedby="note-error"
                                                                        aria-invalid="false"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab3" class="tab-pane fade"
                                            id="regTab_3">
                                            <div class="panel panel-info radius-none ">
                                                {{-- <div class="panel-heading radius-none"> --}}
                                                {{-- <h4 class="panel-title">@lang('message.guarantorBlockHeading')</h4> --}}
                                                {{-- </div> --}}
                                                <div class="panel-body">
                                                    <div class="clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-dark font-weight-bold h4">
                                                                <label for="">নাগরিক সন্ধান করুন </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" class="form-control" placeholder="Enter NID No." name="guarantor[ciNID]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" name="guarantor[dob]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="button" name="guarantor[cCheck]" onclick="checkCitizen('guarantor')" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_guarantor"></span>
                                                                </div>
                                                            </div>





                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorName_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>জামানতকারীর
                                                                        নাম</label>
                                                                    <input name="guarantor[name]" id="guarantorName_1"
                                                                        class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="guarantor[type]"
                                                                        class="form-control form-control-sm" value="3">
                                                                    <input type="hidden" name="guarantor[id]"
                                                                        id="guarantorId_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="guarantor[email]"
                                                                        id="guarantorEmail_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="guarantor[thana]"
                                                                        id="guarantorThana_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="guarantor[upazilla]"
                                                                        id="guarantorUpazilla_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="guarantor[age]"
                                                                        id="guarantorAge_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorPhn_1"
                                                                        class="control-label">মোবাইল</label>
                                                                    <input name="guarantor[phn]" id="guarantorPhn_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorNid_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>জাতীয় পরিচয়
                                                                        পত্র</label>
                                                                    <input name="guarantor[nid]" id="guarantorNid_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorGender_1"
                                                                        class="control-label">লিঙ্গ</label>
                                                                    <select style="width: 100%;"
                                                                        class="selectDropdown form-control form-control-sm"
                                                                        name="guarantor[gender]" id="guarantorGender_1">
                                                                        <option value="">বাছাই করুন</option>
                                                                        <option value="MALE">পুরুষ</option>
                                                                        <option value="FEMALE">নারী</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorFather_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পিতার নাম</label>
                                                                    <input name="guarantor[father]"
                                                                        id="guarantorFather_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorMother_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>মাতার নাম</label>
                                                                    <input name="guarantor[mother]"
                                                                        id="guarantorMother_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorDesignation_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পদবি</label>
                                                                    <input name="guarantor[designation]"
                                                                        id="guarantorDesignation_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="guarantorOrganization_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>প্রতিষ্ঠানের
                                                                        নাম</label>
                                                                    <input name="guarantor[organization]"
                                                                        id="guarantorOrganization_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="guarantorPresentAddree_1">ঠিকানা</label>
                                                                    <textarea id="guarantorPresentAddree_1"
                                                                        name="guarantor[presentAddress]" rows="2"
                                                                        class="form-control element-block blank"
                                                                        aria-describedby="note-error"
                                                                        aria-invalid="false"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab4" class="tab-pane fade"
                                            id="regTab_4">
                                            <div class="panel panel-info radius-none ">
                                                {{-- <div class="panel-heading radius-none"> --}}
                                                {{-- <h4 class="panel-title">@lang('message.lawyerBlockHeading')</h4> --}}
                                                {{-- </div> --}}
                                                <div class="panel-body">
                                                    <div class="clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-dark font-weight-bold h4">
                                                                <label for="">নাগরিক সন্ধান করুন </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" class="form-control" placeholder="Enter NID No." name="lawyer[ciNID]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" name="lawyer[dob]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="button" name="lawyer[cCheck]" onclick="checkCitizen('lawyer')" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_lawyer"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerName_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>আইনজীবীর
                                                                        নাম</label>
                                                                    <input name="lawyer[name]" id="lawyerName_1"
                                                                        class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="lawyer[type]"
                                                                        class="form-control form-control-sm" value="4">
                                                                    <input type="hidden" name="lawyer[id]"
                                                                        id="lawyerId_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="lawyer[email]"
                                                                        id="lawyerEmail_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="lawyer[thana]"
                                                                        id="lawyerThana_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="lawyer[upazilla]"
                                                                        id="lawyerUpazilla_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="lawyer[age]"
                                                                        id="lawyerAge_1" class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerPhn_1"
                                                                        class="control-label">মোবাইল</label>
                                                                    <input name="lawyer[phn]" id="lawyerPhn_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerNid_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>জাতীয় পরিচয়
                                                                        পত্র</label>
                                                                    <input name="lawyer[nid]" id="lawyerNid_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerGender_1" class="control-label">নারী
                                                                        / পুরুষ</label>
                                                                    <select style="width: 100%;"
                                                                        class="selectDropdown form-control form-control-sm"
                                                                        name="lawyer[gender]" id="lawyerGender_1">
                                                                        <option value="">বাছাই করুন</option>
                                                                        <option value="MALE">পুরুষ</option>
                                                                        <option value="FEMALE">নারী</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerFather_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পিতার নাম</label>
                                                                    <input name="lawyer[father]" id="lawyerFather_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerMother_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>মাতার নাম</label>
                                                                    <input name="lawyer[mother]" id="lawyerMother_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerDesignation_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পদবি</label>
                                                                    <input name="lawyer[designation]"
                                                                        id="lawyerDesignation_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerOrganization_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>প্রতিষ্ঠানের
                                                                        নাম</label>
                                                                    <input name="lawyer[organization]"
                                                                        id="lawyerOrganization_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="lawyerPresentAddree_1">ঠিকানা</label>
                                                                    <textarea id="lawyerPresentAddree_1"
                                                                        name="lawyer[presentAddress]" rows="2"
                                                                        class="form-control element-block blank"
                                                                        aria-describedby="note-error"
                                                                        aria-invalid="false"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab5" class="tab-pane fade"
                                            id="regTab_5">
                                            <div class="panel panel-info radius-none ">
                                                <div style="margin: 10px" id="accordion" role="tablist"
                                                    aria-multiselectable="true" class="panel-group notesDiv">
                                                    <section class="panel panel-primary nomineeInfo" id="nomineeInfo">

                                                        <div class="accordion accordion-solid accordion-toggle-plus"
                                                            id="accordionExample3">
                                                            <div id="cloneNomenee" class="card">
                                                                <input type="hidden" id="NomineeCount" value="1">
                                                                <div class="card-header" id="headingOne3">
                                                                    <div class="card-title h4" data-toggle="collapse"
                                                                        data-target="#collapseOne3">
                                                                        উত্তরাধিকারীর তথ্য &nbsp; <span
                                                                            id="spannCount">(1)</span>
                                                                    </div>
                                                                </div>
                                                                <div id="collapseOne3" class="collapse show"
                                                                    data-parent="#accordionExample3">
                                                                    <div class="card-body">
                                                                        <div class="clearfix">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="text-dark font-weight-bold h4">
                                                                                    <label for="">নাগরিক সন্ধান করুন </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input required type="text" id="nomineeCiNID_1" class="form-control" placeholder="Enter NID No." name="nominee[ciNID][]">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input required type="text" id="nomineeDob_1" name="nominee[dob][]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <input type="button" name="nomineeCCheck_1" name="nominee[cCheck][]" onclick="checkNomineeCitizen('nominee', 1)" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_nominee_1"></span>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeName_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>উত্তরাধিকারীর
                                                                                            নাম</label>
                                                                                        <input name="nominee[name][]"
                                                                                            id="nomineeName_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[type][]"
                                                                                            class="form-control form-control-sm"
                                                                                            value="5">
                                                                                        <input type="hidden"
                                                                                            name="nominee[id][]"
                                                                                            id="nomineeId_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[email][]"
                                                                                            id="nomineeEmail_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[thana][]"
                                                                                            id="nomineeThana_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[upazilla][]"
                                                                                            id="nomineeUpazilla_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[designation][]"
                                                                                            id="nomineeDesignation_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                        <input type="hidden"
                                                                                            name="nominee[organization][]"
                                                                                            id="nomineeOrganization_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineePhn_1"
                                                                                            class="control-label">মোবাইল</label>
                                                                                        <input name="nominee[phn][]"
                                                                                            id="nomineePhn_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeNid_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>জাতীয়
                                                                                            পরিচয় পত্র</label>
                                                                                        <input name="nominee[nid][]"
                                                                                            id="nomineeNid_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeGender_1"
                                                                                            class="control-label">নারী /
                                                                                            পুরুষ</label>
                                                                                        <select style="width: 100%;"
                                                                                            class="selectDropdown form-control"
                                                                                            name="nominee[gender][]"
                                                                                            id="nomineeGender_1">
                                                                                            <option value="">
                                                                                                বাছাই করুন</option>
                                                                                            <option value="MALE">
                                                                                                পুরুষ</option>
                                                                                            <option value="FEMALE">
                                                                                                নারী</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeFather_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>পিতার
                                                                                            নাম</label>
                                                                                        <input name="nominee[father][]"
                                                                                            id="nomineeFather_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeMother_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>মাতার
                                                                                            নাম</label>
                                                                                        <input name="nominee[mother][]"
                                                                                            id="nomineeMother_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="nomineeAge_1"
                                                                                            class="control-label"><span
                                                                                                style="color:#FF0000"></span>বয়স</label>
                                                                                        <input name="nominee[age][]"
                                                                                            id="nomineeAge_1"
                                                                                            class="form-control form-control-sm"
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="nomineePresentAddree_1">ঠিকানা</label>
                                                                                        <textarea
                                                                                            id="nomineePresentAddree_1"
                                                                                            name="nominee[presentAddress][]"
                                                                                            rows="1"
                                                                                            class="form-control form-control-sm element-block blank"
                                                                                            aria-describedby="note-error"
                                                                                            aria-invalid="false"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div style="text-align: right;margin: 10px;">
                                                    <button type="button" id="RemoveNominee" class="btn btn-danger">
                                                        বাতিল
                                                    </button>
                                                    <button id="AddNominee" type="button" class="btn btn-primary">
                                                        উত্তরাধিকারী যোগ করুন
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <div role="tabpanel" aria-labelledby="regTab6" class="tab-pane fade"
                                            id="regTab_6">
                                            <div class="panel panel-info radius-none ">
                                                {{-- <div class="panel-heading radius-none"> --}}
                                                {{-- <h4 class="panel-title">@lang('message.lawyerBlockHeading')</h4> --}}
                                                {{-- </div> --}}
                                                <div class="panel-body">
                                                    <div class="clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="text-dark font-weight-bold h4">
                                                                <label for="">নাগরিক সন্ধান করুন </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" class="form-control" placeholder="Enter NID No." name="police[ciNID]">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input required type="text" name="police[dob]" placeholder="Enter Date of Birth" id="dob" class="form-control common_datepicker" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="button" name="police[cCheck]" onclick="checkCitizen('police')" class="btn btn-danger" value="সন্ধান করুন"> <span class="ml-5" id="res_police"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lawyerName_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>ভারপ্রাপ্ত
                                                                        কর্মকর্তার নাম</label>
                                                                    <input name="police[name]" id="policeName_1"
                                                                        class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="police[type]"
                                                                        class="form-control form-control-sm" value="6">
                                                                    <input type="hidden" name="police[id]"
                                                                        id="policeId_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="police[organization]"
                                                                        id="policeOrganization_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden" name="police[age]"
                                                                        id="policeAge_1" class="form-control form-control-sm" value="">
                                                                    <input type="hidden" name="police[mother]"
                                                                        id="policeMother_1" class="form-control form-control-sm"
                                                                        value="">
                                                                    <input type="hidden"
                                                                        name="police[presentAddress]"
                                                                        id="policePresentAddree_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeFather_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পিতার নাম</label>
                                                                    <input name="police[father]" id="policeFather_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="policeDesignation_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span>পদবি</label>
                                                                    <input name="police[designation]"
                                                                        id="policeDesignation_1" class="form-control form-control-sm"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeNid_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>জাতীয় পরিচয়
                                                                        পত্র</label>
                                                                    <input name="police[nid]" id="policeNid_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeGender_1" class="control-label">নারী
                                                                        / পুরুষ</label>
                                                                    <select style="width: 100%;"
                                                                        class="selectDropdown form-control"
                                                                        name="police[gender]" id="policeGender_1">
                                                                        <option value="">বাছাই করুন</option>
                                                                        <option value="MALE">পুরুষ</option>
                                                                        <option value="FEMALE">নারী</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policePhn_1"
                                                                        class="control-label">মোবাইল</label>
                                                                    <input name="police[phn]" id="policePhn_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeEmail_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>ইমেইল</label>
                                                                    <input name="police[email]" id="policeEmail_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeThana_1" class="control-label"><span
                                                                            style="color:#FF0000"></span>থানা</label>
                                                                    <input name="police[thana]" id="policeThana_1"
                                                                        class="form-control form-control-sm" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="policeUpazilla_1"
                                                                        class="control-label"><span
                                                                            style="color:#FF0000"></span> উপজেলা</label>
                                                                    <input name="police[upazilla]"
                                                                        id="policeUpazilla_1" class="form-control form-control-sm"
                                                                        value="">
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
                        <fieldset class="mb-8 p-7">
                            <legend>কার্যক্রম</legend>
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <div class="example-preview"> --}}
                                    <div class="panel panel-info radius-none">
                                        {{-- <div class="panel-heading radius-none">
                                            <h4 class="panel-title">কার্যক্রম</h4>
                                        </div>
                                        <hr> --}}
                                        <div class="panel-body">
                                            {{-- <div class="col-md-12"> --}}
                                            <div class="form-group" id="initialNoteDiv">
                                                <label for="note">প্রাথমিক নোট</label>
                                                <textarea class="form-control note-control" id="note" name="note"
                                                    rows="5"></textarea>
                                                <input type="hidden" name="noteId" id="noteId" class="form-control form-control-sm"
                                                    value="">
                                            </div>
                                            {{-- </div> --}}

                                            {{-- <div class="col-md-4"> --}}
                                            <div class="form-group">
                                                <label for="gcoList" class="control-label"><span
                                                        style="color:#FF0000"></span>সার্টিফিকেট আদালত</label>
                                                <select style="width: 100%;" class="selectDropdown form-control form-control-sm" id="gcoList" name="gcoList">
                                                    <option value="">বাছাই করুন...</option>
                                                    @foreach ($data['gcoList'] as $gco)
                                                        <option value="{{ $gco->id }}">{{  $gco->role->role_name .', '. $gco->office->office_name_bn }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="hidden" name="causeListId" id="causeListId" value="">


                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class=" mb-8">
                            <div
                                class="rounded bg-success-o-75 d-flex align-items-center justify-content-between flex-wrap px-5 py-0">
                                <div class="d-flex align-items-center mr-2 py-2">
                                    <h3 class="mb-0 mr-8">সংযুক্তি (যদি থাকে)</h3>
                                </div>
                                <!--end::Info-->
                                <!--begin::Users-->
                                <div class="symbol-group symbol-hover py-2">
                                    <div class="symbol symbol-30 symbol-light-primary" data-toggle="tooltip"
                                        data-placement="top" title="" role="button" data-original-title="New user">
                                        <div id="addFileRow">
                                            <span class="symbol-label font-weight-bold bg-success">
                                                <i class="text-white fa flaticon2-plus font-size-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Users-->
                            </div>
                            <div class="mt-3 px-5">
                                <table width="100%" class="border-0 px-5" id="fileDiv" style="border:1px solid #dcd8d8;">
                                    <tr></tr>
                                </table>
                                <input type="hidden" id="other_attachment_count" value="1">
                            </div>
                        </fieldset>
                        <div class="row buttonsDiv">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" id="status" name="status" value="DRAFT">
                                    <button type="button" class="btn btn-primary" onclick="myFunction()">
                                        সংরক্ষণ করুন
                                    </button>
                                    <button type="button" onclick="formSubmit()" class="btn btn-warning">
                                        প্রেরণ(সংশ্লিষ্ট আদালত)
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-body-->
                </form>
            </div>
        </div>

    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
    <script src="{{ asset('js/number2banglaWord.js') }}"></script>
    @include('appealInitiate.appealCreate_Js')
    <script>
        function checkCitizen(div_id){
            var id = '#'+ div_id;
            var nid = $("input[name='"+div_id+"[ciNID]']").val();
            var dob = $("input[name='"+div_id+"[dob]']").val();
            $("input[name='"+div_id+"[cCheck]']").val('Checking...');
            $("input[name='"+div_id+"[cCheck]']").prop('disabled', true);

            $.ajax({
                method: "POST",
                url: "{{ route('citizen_check') }}",
                data: {'nid': nid, 'dob':dob},
                success: (result) => {
                    var c = result.data.citizen;
                    console.log(result);
                    console.log(c);

                var nid = c.citizen_NID;
                var gender = c.citizen_gender;
                if(gender == 'male'){
                    gender = "MALE";
                }else{
                    gender = "FEMALE";
                }
                var father = c.father;
                var mother = c.mother;
                var phone = c.citizen_phone_no;
                var name = c.citizen_name;
                var nidPic = c.citizen_NID_pic;
                $("input[name='"+div_id+"[nid]']").val(nid);
                $("select[name='"+div_id+"[gender]'] option[value="+gender+"]").prop("selected", true);
                $("input[name='"+div_id+"[father]']").val(father);
                $("input[name='"+div_id+"[mother]']").val(mother);
                $("input[name='"+div_id+"[phn]']").val(phone);
                $("input[name='"+div_id+"[name]']").val(name);
                $(id+"_nidPic").empty();
                $(id+"_nidPic").append('<img class="w-25 border border-danger rounded border-2" src="{{ url("") }}/' + nidPic + '">');
                // applicant[nidPic]

                    $("#res_" + div_id).empty();
                    $("#res_" + div_id).append(" <span class='text-primary h5'>"+ result.message +"</span>");
                    $("input[name='"+div_id+"[cCheck]']").val('সন্ধান করুন');
                    $("input[name='"+div_id+"[cCheck]']").prop('disabled', false);
                },
                error: (error) => {
                    // console.log(error);
                    $(id+"_nidPic").empty();
                    $("#res_" + div_id).empty();
                    $("#res_" + div_id).append(" <span class='text-danger h5'>"+ error.responseJSON.err_res +"</span>");
                    $("input[name='"+div_id+"[cCheck]']").val('সন্ধান করুন');
                    $("input[name='"+div_id+"[cCheck]']").prop('disabled', false);

                }
            });
        }
    </script>
    <script>
        function checkNomineeCitizen(div_id, i){
            var id = '#'+ div_id;
            var nid = $(id + "CiNID_" +i).val();
            var dob = $(id + "Dob_" +i).val();
            console.log(nid);
            // return;
            $(id + "CCheck_" +i).val('Checking...');
            $(id + "CCheck_" +i).prop('disabled', true);

            $.ajax({
                method: "POST",
                url: "{{ route('citizen_check') }}",
                data: {'nid': nid, 'dob':dob},
                success: (result) => {
                    var c = result.data.citizen;
                    // console.log(result);
                    // console.log(c);
                    var nid = c.citizen_NID;
                    var father = c.father;
                    var mother = c.mother;
                    var phone = c.citizen_phone_no;
                    var name = c.citizen_name;
                    var gender = c.citizen_gender;
                    var nidPic = c.citizen_NID_pic;
                    if(gender == 'male'){
                        gender = "MALE";
                    }else{
                        gender = "FEMALE";
                    }

                    $(id + "Nid_" +i).val(nid);
                    $(id + "Gender_" + i +" option[value="+gender+"]").prop("selected", true);
                    $(id + "Father_" + i).val(father);
                    $(id + "Mother_" + i).val(mother);
                    $(id + "Phn_" + i).val(phone);
                    $(id + "Name_" + i).val(name);
                    $(id+"_nidPic_" + i).empty();
                    $(id+"_nidPic_" + i).append('<img class="w-25 border border-danger rounded border-2" src="{{ url("") }}/' + nidPic + '">');


                    $("#res_" + div_id + '_' + i).empty();
                    $("#res_" + div_id + '_' + i).append(" <span class='text-primary h5'>"+ result.message +"</span>");
                    $(id + "CCheck_" +i).val('সন্ধান করুন');
                    $(id + "CCheck_" +i).prop('disabled', false);
                },
                error: (error) => {
                    // console.log(error);
                    $(id+"_nidPic_" + i).empty();
                    $("#res_" + div_id + '_' + i).empty();
                    $("#res_" + div_id + '_' + i).append(" <span class='text-danger h5'>"+ error.responseJSON.err_res +"</span>");
                    $(id + "CCheck_" +i).val('সন্ধান করুন');
                    $(id + "CCheck_" +i).prop('disabled', false);
                }
            });
        }
    </script>

@endsection
