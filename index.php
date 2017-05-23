<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>

<style type="text/css">
    #mobileStatus{
        cursor: pointer;

  .filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

    }
</style>
</head>
<body>
<br><br>
<div class="container">
<div class="col-md-6 well">
  <div id="alert"></div>
    <div class="form-area ">  
        <form id="formdata" role="form" >
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
   
                        <div class="dropdown">
						<ul class="dropdown-menu" id="mobileStatus"></ul>
                        </div>
                       <div id="status"></div>
					</div>
					
                    <div class="form-group">
                    <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>

                    <div id="insertresult"></div>
            
        <button  type="button" id="submit"  class=" btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>

<div class="col-md-6">
                <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
            </div>
            <table id="table" class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="name"></th>
                        <th><input type="text" class="form-control" placeholder="email" ></th>
                        <th><input type="text" class="form-control" placeholder="mobile"></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tabledata">
                   
                
                </tbody>
            </table>
        </div>
            </div>



</div>
</body>
</html>