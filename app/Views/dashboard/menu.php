
<?php
echo $this->include('partials/topbar');
if (session('data')['permission'] == 1) {
    echo $this->include('dashboard/tp/sidebar');
} elseif (session('data')['permission'] == 2) {
    echo $this->include('dashboard/ts/sidebar');
} else {
    session_destroy();
}