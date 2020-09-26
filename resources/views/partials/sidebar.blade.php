@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('income_access')
            <li class="{{ $request->segment(2) == 'incomes' ? 'active active-sub' : '' }}">
                    <a href="{{ route('admin.incomes.index') }}">
                        <i class="fa fa-arrow-circle-right"></i>
                        <span class="title">
                            @lang('quickadmin.income.title')
                        </span>
                    </a>
                </li>
            @endcan
            @can('expense_access')
            <li class="{{ $request->segment(2) == 'expenses' ? 'active active-sub' : '' }}">
                    <a href="{{ route('admin.expenses.index') }}">
                        <i class="fa fa-arrow-circle-left"></i>
                        <span class="title">
                            @lang('quickadmin.expense.title')
                        </span>
                    </a>
                </li>
            @endcan

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

