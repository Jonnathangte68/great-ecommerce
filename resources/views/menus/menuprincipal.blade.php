			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>  <!-- Lista a la cual pertenecen todos los items del menu-->



						@foreach($menuitems as $menuit)

						<li> <!-- Item de menu-->

							<a href="#">{{ $menuit->name }}</a>

									<div class="cbp-hrsub">
										<div class="cbp-hrsub-inner"> 


									<div>
									 <h4>Learning &amp; Games</h4>
										<ul>
											<li>

												@foreach($menuit->items as $itm)
												<a href="{{ $itm->link }}">{{$itm->name}}</a>
												@endforeach


											</li>
										</ul> 
									</div>



										</div><!-- /cbp-hrsub-inner -->
									</div><!-- /cbp-hrsub -->
						</li>

						@endforeach




					</ul>
				</nav>
			</div>