</div>
<!-- End Page content -->
</div>

<?php require_once 'modals.php'; ?>

<!-- JavaScript -->
<script src="<?php echo Flight::get('base'); ?>/assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/plugins/select2/select2.min.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/plugins/summernote/summernote.min.js"></script>
<script
    src="<?php echo Flight::get('base'); ?>/assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="<?php echo Flight::get('base'); ?>/assets/plugins/jGrowl/jquery.jgrowl.js"></script>

<script>
    var controller = "<?php echo trim(Flight::get('controller'), '/'); ?>";
    var basePath = "<?php echo Flight::get('base'); ?>/";
    var lastSegment = "<?php echo Flight::get('lastSegment'); ?>";
</script>
<script src="<?php echo Flight::get('base'); ?>/assets/js/custom.js?v=<?php echo time(); ?>"></script>

</body>
</html>
