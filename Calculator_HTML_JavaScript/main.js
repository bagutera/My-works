<script> 
//Function for calculating the salary.							
    	function salary (hour,rate){					
            retrTax=0.02; 		//Retirement tax in 2017.
            nonTaxMinimum=180; 		//Non-taxable minimum in 2017
            medIns=0.01; 	//Medical insurance in 2017
            unpIns=0.016; //Unemployment insurence in 2017
            incTax=0.2; 		//Income tax in 2017
    
	//Converting input date through prompt from String in Int.
	var hour= parseInt(hour);					
	var rate= parseInt(rate);															
	
	//Checking incoming data. There are must be numbers.
    	if(typeof(hour)=="number" && typeof(rate)=="number") { 	 
         
        bruttoSalary = (hour * rate);				
                
	//Check if the gross salary is greater than the non-taxable minimum.
	if (bruttoSalary > nonTaxMinimum){						
        
	//The formula for calculating net wages is greater than the non-taxable minimum.
         nettoSalary = (bruttoSalary * (1 - retrTax - medIns - unpIns) - nonTaxMinimum) * (1 - incTax) + nonTaxMinimum;	
     
	//Checks gross wages if it is less than or equal to the non-taxable minimum.
	}else if (bruttoSalary <= nonTaxMinimum){								
        
		// The formula for calculating net wages is less than the non-taxable minimum.
		nettoSalary = (bruttoSalary * (1 - retrTax - medIns - unpIns) - nonTaxMinimum) + nonTaxMinimum;
		
         }else{return false}								//Output of the error if the prompt did not enter numbers.
            
	    Tax=(bruttoSalary-nettoSalary);						//The formula for calculating taxes.
	    
            result=Array(bruttoSalary,nettoSalary,Tax);					//Array of 3 variables
            return result;								//Returns an array.
			}
		}

        hour=prompt("Payment per hour:");				
        rate=prompt("The amount of hours:");	
        realSalary = salary(hour, rate);					//Call the function salary
        
	alert("BruttoSalary: " + realSalary[0] + "EUR, NettoSalary: " + realSalary[1] + "EUR, Taxis: " + realSalary[2] + "EUR.");
</script>
