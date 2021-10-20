<!DOCTYPE html>
<html lang="en"><head>
<TITLE>Cart </TITLE>
<link rel="stylesheet" href="style3.css">  
</head>
<body background="images/pawss.jpg">
<center>
<div id="product-grid">
    <div class="txt-heading">ACCESSORIES</div>
		<div class="product-item">
        <form id="frmCart"><center>
            <div class="product-image">
                <img src="images/ball.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Rubber Ball</strong>
                </div>
                <div class="product-info product-price">RM2.00/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_ball"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','ball')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_ball"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/bed.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Pet Bed</strong>
                </div>
                <div class="product-info product-price">RM25.00</div>
                <div class="product-info">
                    <button type="button"
                        id="add_bed"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','bed')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_bed"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>           
			<div class="product-item">
       <form id="frmCart">
            <div class="product-image">
                <img src="images/collar.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Collar Pets</strong>
                </div>
                <div class="product-info product-price">RM2.50/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_collar"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','collar')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_collar"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
	<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/condo.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Cat Condo Tree</strong>
                </div>
                <div class="product-info product-price">RM80.00</div>
                <div class="product-info">
                    <button type="button"
                        id="add_condo"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','condo')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_condo"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
	<div class="product-item">
        <form id="frmCart">
           <div class="product-image">
                <img src="images/feeder.png" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Pet Feeder</strong>
                </div>
                <div class="product-info product-price">RM13.90</div>
                <div class="product-info">
                    <button type="button"
                        id="add_feeder"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','feeder')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_feeder"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/hammock.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Standing Hammock</strong>
                </div>
                <div class="product-info product-price">RM19.90</div>
                <div class="product-info">
                    <button type="button"
                        id="add_hammock"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','hammock')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_hammock"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>           
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/toys.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Rubber Toys</strong>
                </div>
                <div class="product-info product-price">RM2.90/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_toys"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','toys')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_toys"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/litter.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Litter Box</strong>
                </div>
                <div class="product-info product-price">RM20.00</div>
                <div class="product-info">
                    <button type="button"
                        id="add_litter"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','litter')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_litter"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>  
	</div></center>
	
	<center>
<div id="product-grid">
    <div class="txt-heading">FOODS</div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/whiskas.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Whiskas</strong>
                </div>
                <div class="product-info product-price">RM24.30</div>
                <div class="product-info">
                    <button type="button"
                        id="add_whiskas"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','whiskas')">
                        <img src="images/add-to-cart.png"/>
                    </button>
                    <input type="text"
                        id="qty_whiskas"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/wetfood.png" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Whiskas Wet Food</strong>
                </div>
                <div class="product-info product-price">RM1.97/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_wetfood"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','wetfood')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_wetfood"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>           
			<div class="product-item">
       <form id="frmCart">
            <div class="product-image">
                <img src="images/friskies.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Purina Friskies</strong>
                </div>
                <div class="product-info product-price">RM23.50</div>
                <div class="product-info">
                    <button type="button"
                        id="add_friskies"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','friskies')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_friskies"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
	<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/felic.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Felix</strong>
                </div>
                <div class="product-info product-price">RM3.60/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_felic"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','felic')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_felic"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
	<div class="product-item">
        <form id="frmCart">
           <div class="product-image">
                <img src="images/happydog.png" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Happy Dog</strong>
                </div>
                <div class="product-info product-price">RM18.90</div>
                <div class="product-info">
                    <button type="button"
                        id="add_happydog"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','happydog')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_happydog"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/alpo.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Purina Alpo</strong>
                </div>
                <div class="product-info product-price">RM27.00/kg</div>
                <div class="product-info">
                    <button type="button"
                        id="add_alpo"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','alpo')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_alpo"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>           
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/arden.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Arden Grange</strong>
                </div>
                <div class="product-info product-price">RM23.70/kg</div>
                <div class="product-info">
                    <button type="button"
                        id="add_arden"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','arden')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_arden"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
                <img src="images/bonacibo.jpg" width="100%" height="100%">
            </div>
            <div>
                <div class="product-info">
                    <strong>Bonacibo</strong>
                </div>
                <div class="product-info product-price">RM4.30/each</div>
                <div class="product-info">
                    <button type="button"
                        id="add_bonacibo"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','bonacibo')">
                        <img src="images/add-to-cart.png" />
                    </button>
                    <input type="text"
                        id="qty_bonacibo"
                        name="quantity" value="1" size="2" />
                </div>
            </div>
        </form>
    </div>  
	</div></center>
</body>
</html>