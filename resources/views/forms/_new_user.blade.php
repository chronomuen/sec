
    <div class="row clearfix">
    	<div class="table-responsive">
			<table class="table table-bordered table-hover table-sortable" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Name
						</th>
						<th class="text-center">
							Email
						</th>
						<th class="text-center">
							Notes
						</th>
    					<th class="text-center">
							Option
						</th>
        				<th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
						</th>
					</tr>
				</thead>
				<tbody>
    				<tr id='addr0' data-id="0" class="hidden">
						<td data-name="name">
              <div width="1">
						    <input type="text" name='name0'  placeholder='Name'/>
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
              </div>
						</td>
						<td data-name="mail">
              <div width="1">
                <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
            		<span class="input-group-btn inline">
            			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            		</span>
              </div>
						</td>
						<td data-name="desc">
						    <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
						</td>
    					<td data-name="sel">
						    <select name="sel0">
        				        <option value"">Select Option</option>
    					        <option value"1">Option 1</option>
        				        <option value"2">Option 2</option>
        				        <option value"3">Option 3</option>
						    </select>
						</td>
                        <td data-name="del">
                            <button nam"del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id="add_row" class="btn btn-default pull-right">Add Row</a>
