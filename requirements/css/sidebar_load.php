<style>
body {
    margin-left: 70px;
}

li .fa {
	position: relative;
	display: table-cell;
	width: 60px;
	height: 30px;
	text-align: center;
	vertical-align: middle;
	font-size: 20px;
}


.main-menu:hover,
nav.main-menu.expanded {
	width: 250px;
	overflow: visible;
	-webkit-box-shadow: -6px 0px 16px 12px rgba(0,0,0,0.75);
	-moz-box-shadow: -6px 0px 16px 12px rgba(0,0,0,0.75);
	box-shadow: -6px 0px 16px 12px rgba(0,0,0,0.75);
    overflow: none;
}

.main-menu {
	top: 0;
    bottom: 0;
    height: 100%;
	left: 0;
	width: 60px;
	overflow: hidden;
	-webkit-transition: width .05s linear;
	transition: width .05s linear;
	-webkit-transform: translateZ(0) scale(1, 1);
    z-index: 500;
    position: fixed;
}

.main-menu>ul {
	margin: 7px 0;
}

.main-menu li {
	position: relative;
	display: block;
	width: 250px;
}

.main-menu li>a {
	position: relative;
	display: table;
	border-collapse: collapse;
	border-spacing: 0;
	font-family: arial;
	font-size: 15px;
	text-decoration: none;
	-webkit-transform: translateZ(0) scale(1, 1);
	-webkit-transition: all .1s linear;
	transition: all .1s linear;
}

.main-menu .nav-icon {
	position: relative;
	display: table-cell;
	width: 60px;
	height: 36px;
	text-align: center;
	vertical-align: middle;
    font-size: 18px;
}

.main-menu .nav-text {
	position: relative;
	display: table-cell;
	vertical-align: middle;
	width: 190px;
	font-family: 'Titillium Web', sans-serif;
}

.main-menu>ul.logout {
	position: absolute;
	left: 0;
	bottom: 0;
}

.no-touch .scrollable.hover {
	overflow-y: hidden;
}

.no-touch .scrollable.hover:hover {
	overflow-y: auto;
	overflow: visible;
}

a:hover,
a:focus {
	text-decoration: none;
}

nav {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

nav ul,
nav li {
	outline: 0;
	margin: 0;
	padding: 0;
}

.main-menu li:hover>a,
nav.main-menu li.active>a,
.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus,
.dropdown-menu>.active>a,
.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus,
.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
.dashboard-page nav.dashboard-menu ul li.active a {
	color: #fff;
	background-color: #535555;
}

hr {
    height: 2.0px;
    border: none;
}
</style>