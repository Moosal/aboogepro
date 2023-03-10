<?php $page="notifications-settings";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Notifications Settings @endslot
    @slot('li_1') Settings @endslot
    @slot('li_2') Notifications Settings @endslot
@endcomponent 


                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="card settings-menu">
                                        <div class="sidebar-menu">
                                            <ul>
                                                <li class="menu-title">Settings</li>
                                                <li> 
                                                    <a href="{{url('settings')}}"><i class="la la-building"></i> <span>Company Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('localization')}}"><i class="la la-clock-o"></i> <span>Localization</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('theme-settings')}}"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('roles-permissions')}}"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('email-settings')}}"><i class="la la-at"></i> <span>Email Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('performance-setting')}}"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('approval-setting')}}"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('invoice-settings')}}"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('salary-settings')}}"><i class="la la-money"></i> <span>Salary Settings</span></a>
                                                </li>
                                                <li class="active"> 
                                                    <a href="{{url('notifications-settings')}}"><i class="la la-globe"></i> <span>Notifications</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('change-password')}}"><i class="la la-lock"></i> <span>Change Password</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('leave-type')}}"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('toxbox-setting')}}"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                                                </li>
                                                <li> 
                                                    <a href="{{url('cron-setting')}}"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-lg-9 settings-cont">
                                    <div class="card p-4">
                                        <ul class="list-group notification-list">
                                            <li class="list-group-item">
                                                Employee
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="staff_module" class="check">
                                                    <label for="staff_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Holidays
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="holidays_module" class="check" checked>
                                                    <label for="holidays_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Leaves
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="leave_module" class="check" checked>
                                                    <label for="leave_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Events
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="events_module" class="check" checked>
                                                    <label for="events_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Chat
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="chat_module" class="check" checked>
                                                    <label for="chat_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                Jobs
                                                <div class="status-toggle">
                                                    <input type="checkbox" id="job_module" class="check">
                                                    <label for="job_module" class="checktoggle">checkbox</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
@endsection