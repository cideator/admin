<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                @if(View::exists('admin.theme.menu'))
                    @include('admin.theme.menu')
                @endif

            </ul>
        </nav>
        <!-- Sidebar menu -->
    </div>
</aside>