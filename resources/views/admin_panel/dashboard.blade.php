@extends('admin_panel.layouts.master')


{{--  @if (auth()->user()->hasAnyRole(['super-admin', 'admin']))
    @include('admin_panel.mainDashboard')
@elseif(['member'])
    @include('admin_panel.newUserDashboard')
@endif  --}}

@if (auth()->user()->hasAnyRole(['super-admin', 'admin']))
    @include('admin_panel.mainDashboard')
@elseif (auth()->user()->hasRole('member'))
    @include('admin_panel.memberDashboard')
@else
    @include('admin_panel.newUserDashboard')
@endif
