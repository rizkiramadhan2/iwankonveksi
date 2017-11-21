
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    

<div class="container">
	<div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Cari nama bahan" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
                <br>
           
            </form>
        </div>
		<div class="col-md-9">
    	 <table class="table table-striped table-list-search animated fadeIn">
                    <thead style="background-color: #acb060;color: white">
                        <tr>
                            <th>No.</th>
                            <th>Jenis Bahan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data as $row): ?>
                        <tr>
                            <td><?= $row['ID']?></td>
                            <td><?= $row['jenis_bahan']?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>   
		</div>
	</div>
</div>
<!--<script type="text/javascript">
   /* $(document).ready(
      function(){
        $('#sel1').on('change', function() {
          var id = $('#sel1').val();
          window.location.replace("<?php// echo base_url().'jenis-bahan-' ?>"+id);
        })
            //$('#datepicker').datepicker();  
      }
    );*/

  </script>-->
<script src="https://cdn.rawgit.com/yahoo/xss-filters/master/dist/xss-filters.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText1 = $(that).val().toLowerCase();
            var inputText =  xssFilters.inHTMLData(inputText1);
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + inputText
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});
</script>

