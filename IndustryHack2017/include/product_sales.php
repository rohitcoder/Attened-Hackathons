
				<div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l8">
                         <div class="card">
						 <div class="card-content">
                                <span class="card-title">Add New Sales order.</span><br>
                                <div class="row">
                                    <form class="col s12" id="add_sales">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                        <select name="stock_id" required>
                                            <option value="" disabled selected>Choose your option</option>
											<?php 
											$stocks = getAllStockNames('final');
											foreach($stocks as $stock){?>
                                            <option value="<?php echo $stock['id'];?>"><?php echo $stock['name'];?></option>
											<?php } ?> 
                                        </select>
                                                <label for="icon_prefix">Item Name</label>
                                            </div>
											<input type="hidden" name="type" value="final">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="icon_telephone" name="per_price" type="number" required>
                                                <label for="icon_telephone">Per Price</label>
                                            </div> 
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">inr</i>
                                                <input id="quantity" name="quantity" type="number" required>
                                                <label for="quantity">Quantity</label>
                                            </div>  
											
											      <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
												<select name="customer_id" id="customer_id" required>
												<option value="" disabled selected>Select Customer</option>
													<?php 
													$customers = getCustomers();
													foreach($customers as $customer){?>
													<option value="<?php echo $customer['id'];?>"><?php echo $customer['name'];?></option>
													<?php } ?> 
												</select>
                                                <label for="icon_prefix">Customer Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">comment</i> 
                                                <textarea id="icon_prefix2" name="comments" class="materialize-textarea"></textarea>
                                                <label for="icon_prefix2">Notes/Comments</label>
                                            </div>
                                            <div class="input-field col s12">											
												<button class="btn waves-effect waves-light" type="submit">Add
												<i class="material-icons right">add</i>
												</button>										
												<button class="btn waves-effect waves-light" type="reset">Reset
												<i class="material-icons right">refresh</i>
												</button>
                                            </div>          
                                        </div>
                                    </form>
                                </div>
                            </div>
						 </div>
                        </div>
                        <?php include('todo_list_widget.php');?>
						    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Sales Orders</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="number">Product</th>
                                            <th data-field="customer">Customer</th>
                                            <th data-field="availability">Availability</th>
                                            <th data-field="company">Quantity</th>
                                            <th data-field="date">Price</th>
                                            <th data-field="progress">Comment</th>
                                            <th data-field="sold_on">Sold on</th>
                                            <th data-field="total">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
									<?php 
									$sales_orders = getAllSalesOrders('final');
									foreach($sales_orders as $sales){?>
                                        <tr>
                                            <td><?php echo $sales['id'];?></td>
                                            <td><?php echo getStockDetails($sales['stock_id'])['name'];?></td>
                                            <td><?php echo getCustomerDetail($sales['customer_id'])['name'];?></td>
                                            <td><?php echo GetQuantityOfStock($sales['stock_id'],'final');?> Units</td>
                                            <td><?php echo $sales['quantity'];?> Units</td>
                                            <td><?php echo $sales['per_price']*$sales['quantity'];?> Rs</td> 
                                            <td><?php echo $sales['comment'];?></td> 
                                            <td><?php echo date('d F y',$sales['time']);?></td>
                                            <td>
												<select>
												  <option value="" selected>Delievered</option>
												  <option value="1">Packed</option>
												  <option value="2">Shipped</option>
												  <option value="3">Returned</option>
												</select>
											</td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
						
                    </div> 
               