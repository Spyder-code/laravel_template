@php
    $init = [];
    // $init = [
    //     [
    //         'title' => 'Dashboard',
    //         'link' => route('home'),
    //         'sub' => false
    //     ],
    //     [
    //         'title' => 'WCF Management',
    //         'sub'=>[
    //             [
    //                 'title' => 'Club Management',
    //                 'link' => route('club.index'),
    //             ],
    //             [
    //                 'title' => 'Cats',
    //                 'link' => route('cat.index'),
    //             ],
    //             [
    //                 'title' => 'Cats Owner',
    //                 'link' => route('catowner.index'),
    //             ],
    //             [
    //                 'title' => 'Judges',
    //                 'link' => route('judge.index'),
    //             ]
    //         ],
    //     ],[
    //         'title' => 'Data Management',
    //         'sub'=>[
    //             [
    //                 'title' => 'Country',
    //                 'link' => route('country.index'),
    //             ],
    //             [
    //                 'title' => 'Cat Age Group',
    //                 'link' => route('catage.index'),
    //             ],
    //             [
    //                 'title' => 'Club Organization',
    //                 'link' => route('catorganization.index'),
    //             ],
    //             [
    //                 'title' => 'Title Class',
    //                 'link' => route('titleclass.index'),
    //             ],
    //             [
    //                 'title' => 'Pedigry Type',
    //                 'link' => route('pedigrytype.index'),
    //             ],
    //             [
    //                 'title' => 'Show Class',
    //                 'link' => route('showclass.index'),
    //             ],
    //             [
    //                 'title' => 'Title Ring',
    //                 'link' => route('titlering.index'),
    //             ],
    //             [
    //                 'title' => 'Ring Point',
    //                 'link' => route('ring.index'),
    //             ],
    //             [
    //                 'title' => 'Judgement Result Point',
    //                 'link' => route('judgementresultpoint.index'),
    //             ],
    //             [
    //                 'title' => 'Best of Best',
    //                 'link' => route('bestofbest.index'),
    //             ],
    //             [
    //                 'title' => 'Best In Show',
    //                 'link' => route('bestinshow.index'),
    //             ],
    //             [
    //                 'title' => 'Best In Variety',
    //                 'link' => route('bestinvariety.index'),
    //             ],
    //         ],
    //     ],[
    //         'title' => 'Cats Management',
    //         'sub'=>[
    //             [
    //                 'title' => 'Cats Breeds',
    //                 'link' => route('catbreed.index'),
    //             ],
    //             [
    //                 'title' => 'Cats Colors',
    //                 'link' => route('catcolor.index'),
    //             ],
    //             [
    //                 'title' => 'Cats Eyes',
    //                 'link' => route('cateye.index'),
    //             ],
    //             [
    //                 'title' => 'Hair Category',
    //                 'link' => route('haircategory.index'),
    //             ]
    //         ],
    //     ],[
    //         'title' => 'Users Management',
    //         'link' => route('user.index'),
    //         'sub' => false
    //     ],
    // ]
@endphp

<div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <!--begin::Menu-->
        <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">

            @foreach ($init as $menu)
                <x-navbar-item :title="$menu['title']" :link="$menu['link']??''" :sub="$menu['sub']"></x-navbar-item>
            @endforeach
        </div>
    </div>
</div>
