  <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; <script>new Date().getFullYear()>2020&&document.write(""+new Date().getFullYear());</script>          <a href="{{ route('admin.home')}}" target="_blank">Half Price Packaging</a> All rights reserved.</div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('/')}}assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('/')}}assets/vendors/chartjs/chart.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/chartist-js/chartist.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="{{asset('/')}}assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/dropify/js/dropify.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/decoupled-document/ckeditor.js"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('/')}}assets/js/plugins.js"></script>
    <script src="{{asset('/')}}assets/js/search.js"></script>
    <script src="{{asset('/')}}assets/js/custom/custom-script.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/customizer.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('/')}}assets/js/scripts/dashboard-modern.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/intro.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/form-file-uploads.js"></script>
    <!-- Data Table -->
    <script src="{{asset('/')}}assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('/')}}assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/data-tables.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/ui-alerts.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{asset('/')}}assets/js/alertify.min.js" type="text/jscript"></script>
    <script src="{{asset('/')}}assets/vendors/select2/select2.full.min.js"></script>
    <script src="{{asset('/')}}assets/js/scripts/form-select2.js"></script>
    <!-- <script src="{{asset('assets/vendors/summernote/dist/summernote.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/summernote/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/summernote/summernote.js')}}" type="text/javascript"></script>
     -->
  <!--    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
 -->



 <script src="{{asset('/')}}assets/vendors/quill/quill.min.js"></script>

<script type="text/javascript">

    const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }
    

  $(document).ready(function(){

    if (select('.quill-editor-full')) {
 
    new Quill(".quill-editor-full", {
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
              color: []
            },
            {
              background: []
            }
          ],
          [{
              script: "super"
            },
            {
              script: "sub"
            }
          ],
          [{
              list: "ordered"
            },
            {
              list: "bullet"
            },
            {
              indent: "-1"
            },
            {
              indent: "+1"
            }
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"]
        ]
      },
      theme: "snow"
    });
  }
  });

</script>
  </body>
</html>

