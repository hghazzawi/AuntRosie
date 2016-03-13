DROP TABLE IF EXISTS VenueLocation CASCADE;
CREATE TABLE VenueLocation
(
     VenueCode INT NOT NULL PRIMARY KEY,
     VenueLocation VARCHAR(40) NOT NULL,
     VenueDate DATE NOT NULL,
     VenueRentalFee MONEY NOT NULL,
     VenueFullTimeAsstCost MONEY NOT NULL,
     VenuePartTimeCost MONEY NOT NULL,
     VenueUtilityCost MONEY NOT NULL
);

DROP TABLE IF EXISTS UserInformation CASCADE;
CREATE TABLE UserInformation
(
     EmployeeCode INT NOT NULL PRIMARY KEY,
     FirstName VARCHAR(25) NOT NULL,
     LastName VARCHAR(25) NOT NULL,
     CellNumber VARCHAR(10) NOT NULL,
     EmailAddress VARCHAR(50) NOT NULL,
     UserName VARCHAR(25) NOT NULL,
     Password VARCHAR(25) NOT NULL,
     Active Boolean NOT NULL,
     DateCreated Date NOT NULL,
     LastLoginDate DATE,
     LastLoginTime TIME
);

DROP TABLE IF EXISTS Main CASCADE;
CREATE TABLE Main
(
     ProductCode INT NOT NULL PRIMARY KEY,
     GroupCode VARCHAR(10) NOT NULL,
     ProductType VARCHAR(30) NOT NULL,
     ProductName  VARCHAR(30) NOT NULL,
     ProductSize INT NOT NULL,
     Availability BOOLEAN NOT NULL,
     ProductImageBig VARCHAR(50),
     ProductImageSmall VARCHAR(50),
     SaleAmount INT NOT NULL,
     OutOfProduction BOOLEAN NOT NULL,
     Calories INT NOT NULL,
     Fat INT NOT NULL,
     SaturatedFat INT NOT NULL,
     TransFat INT NOT NULL,
     Cholesterol INT NOT NULL,
     Sodium INT NOT NULL,
     Carbohydrates INT NOT NULL,
     DietaryFiber INT NOT NULL,
     Sugar INT NOT NULL,
     Protein INT NOT NULL
);

DROP TABLE IF EXISTS Transactions CASCADE;
CREATE TABLE Transactions
(
     TransactionID INT NOT NULL PRIMARY KEY,
     VenueCode INT NOT NULL REFERENCES VenueLocation(VenueCode),
     TransactionDate DATE NOT NULL,
     CustomerFirstName VARCHAR(35),
     CustomerLastName VARCHAR(35),
     CustomerEmail VARCHAR(50),
     CustomerCellphone CHAR(10)
);




DROP TABLE IF EXISTS TransactionLine CASCADE;
CREATE TABLE TransactionLine
(
     LineID INT NOT NULL PRIMARY KEY,
     TransactionID INT NOT NULL REFERENCES Transactions(TransactionID),
     ProductCode INT NOT NULL REFERENCES Main(ProductCode)
);

DROP TABLE IF EXISTS IngredientInventory CASCADE;
CREATE TABLE IngredientInventory
(
     IngredientCode INT NOT NULL PRIMARY KEY,
     IngredientName VARCHAR(50) NOT NULL,
	 QuantityOnHand INT NOT NULL,
     CostPerUnit MONEY NOT NULL
);

DROP TABLE IF EXISTS Accessories CASCADE;
CREATE TABLE Accessories
(
     AccessoryCode INT NOT NULL PRIMARY KEY,
     Name VARCHAR(50) NOT NULL,
	 QuantityOnHand INT NOT NULL,
     CostPerUnit MONEY NOT NULL
);

DROP TABLE IF EXISTS ProductInventory CASCADE;
CREATE TABLE ProductInventory
(
     ProductCode INT NOT NULL PRIMARY KEY REFERENCES Main(ProductCode),
     AccessoryCode INT NOT NULL REFERENCES Accessories(AccessoryCode),
	 QuantityOnHand INT NOT NULL,
     CostPerUnit MONEY NOT NULL
);


DROP TABLE IF EXISTS MainIngredientList CASCADE;
CREATE TABLE MainIngredientList
(
     IngredientListCode INT NOT NULL PRIMARY KEY,
     IngredientCode INT NOT NULL REFERENCES Ingredient(IngredientCode),
     ProductCode INT NOT NULL REFERENCES Main(ProductCode),
     Description VARCHAR(50) NOT NULL,
     IngredientQuantity INT NOT NULL,
     CostPerQuantity MONEY NOT NULL,
     IngredientUnit VARCHAR(4) NOT NULL
);



DROP TABLE IF EXISTS Supply CASCADE;
CREATE TABLE Supply
(
     OrderID INT NOT NULL PRIMARY KEY,
     IngredientCode INT NOT NULL REFERENCES Ingredient(IngredientCode),
     Description VARCHAR(50) NOT NULL,
     OrderDate DATE NOT NULL,
     OrderTime TIME NOT NULL,
     QuantityOrdered INT NOT NULL,
     SupplyUnit VARCHAR(4) NOT NULL,
     UnitPrice MONEY NOT NULL,
     OrderedTo VARCHAR(25) NOT NULL,
     OrderedBy VARCHAR(25) NOT NULL
);
