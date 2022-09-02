$(document).ready(function () {
    var grubClass = [
        {
            grub:'.menu-item-active',
            class:'py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors'
        },
        {
            grub:'.card-icon-menu',
            class:'shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5'
        },
        {
            grub:'.item-menu',
            class:'py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors'
        },
        {
            grub:'.icon-active',
            class:'bg-gradient-to-tl from-purple-700 to-pink-500'
        },
        {
            grub:'.head-table',
            class:'py-3 font-bold uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 text-center'
        },
    ];

    classGroup();function classGroup(){$.each(grubClass,function(b,a){$(a.grub).addClass(a.class),$(a.grub).removeClass(a.grub.replace(".",""))})}


});