<!-- Mainly scripts -->
<script src="backend/js/jquery-3.1.1.min.js"></script>
<script src="backend/js/bootstrap.min.js"></script>
<script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- jQuery UI -->


@foreach($config['js'] as $key => $val)
    {!! '<script src="'.$val.'"></script>' !!}
@endforeach