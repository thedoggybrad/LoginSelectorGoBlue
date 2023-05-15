/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: top;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 10px;
    transition: 0.3s;
    font-size: 17px;
    color: #fff;
    border: 4px solid #1a5fd6;
    box-shadow: 0 -15px 15px rgba(255,255,255,0.05), inset 0 -15px 15px rgba(255,255,255,0.05), 0 15px 15px rgba(0,0,0,0.3), inset 0 0px 5px rgba(0,0,0,0.3);
    border-radius: 10px;
    margin-top: -15px;
    margin-left: 11px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #85C1E9;
  color: #fff;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #1E769A;
  color: #fff;
}

/* Style the tab content */
.tabcontent {
  padding: 6px 12px;
  border-top: none;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}