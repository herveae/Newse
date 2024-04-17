<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- DataTable js -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<!-- initialisation dataTable -->
<script type="text/javascript">
  $(document).ready( function () {
  $("#dataTable").dataTable({
  "oLanguage": {
 "sLengthMenu": "Afficher MENU Enregistrements",
 "sSearch": "Rechercher:",
 "sInfo":"Total de TOTAL enregistrements (_END_ / _TOTAL_)",
 "oPaginate": {
 "sNext": "Suivant",
 "sPrevious":"Précédent"}}})});
</script>

<script type="text/javascript">
  $(document).ready( function () {
  $("#dataTable2").dataTable({
  "oLanguage": {
 "sLengthMenu": "Afficher MENU Enregistrements",
 "sSearch": "Rechercher:",
 "sInfo":"Total de TOTAL enregistrements (_END_ / _TOTAL_)",
 "oPaginate": {
 "sNext": "Suivant",
 "sPrevious":"Précédent"}}})});
</script>
  
<!-- bootstrap js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- INITIALIZE AOS -->
<script>
  AOS.init();
</script>

<script src="assets/js/app.js"></script>