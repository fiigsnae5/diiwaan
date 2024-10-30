<div class="row">
    <div class="col-12">
        <div class="card">
        <div class="card-header bg-info">
				<h4 style="color: white !important" class="card-title">Address
					<button style="float:right;" type="button" class="btn btn-success add_new">Add new</button>
				</h4>
        </div>
            <div class="card_body">
            <div class="table-responsive">
                     <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <?php 
                        include "../forms/function.php";
                        viewTable("select * from district");
                        ?>
                    </table>
            </div>
            </div>
        </div>
    </div>
</div>