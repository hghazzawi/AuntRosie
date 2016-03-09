DROP TABLE IF EXISTS VenueLocation;
CREATE TABLE VenueLocation
(
     VenueCode VARCHAR(4) PRIMARY KEY,
     VenueLocation VARCHAR(40) NOT NULL,
     VenueDate DATE NOT NULL,
     VenueRentalFee MONEY NOT NULL,
     VenueFullTimeAsstCost MONEY NOT NULL,
     VenuePartTimeCost MONEY NOT NULL,
     VenueUtilityCost MONEY NOT NULL
);

DROP TABLE IF EXISTS Transactions;
CREATE TABLE Transactions
(
     TransactionID VARCHAR(7) PRIMARY KEY,
     VenueCode VARCHAR(4) NOT NULL REFERENCES VenueLocation(VenueCode),
     TransactionDate DATE NOT NULL,
     TotalQuantity  INTEGER NOT NULL,
     TotalGrossSales MONEY NOT NULL,
     CustomerName VARCHAR(35) NOT NULL,
     CustomerEmail VARCHAR(50) NOT NULL,
     CustomerCellphone CHAR(10) NOT NULL
);


DROP TABLE IF EXISTS Main;
CREATE TABLE Main
(
     ProductCode VARCHAR(4) PRIMARY KEY,
     GroupCode VARCHAR(10) NOT NULL,
     ProductType VARCHAR(30) NOT NULL,
     ProductName  VARCHAR(30) NOT NULL,
     ProductSize INTEGER NOT NULL,
     Availability INTEGER NOT NULL,
     ProductImageBig INTEGER NOT NULL,
     ProductImageSmall INTEGER NOT NULL,
     SaleAmount INTEGER NOT NULL,
     OutOfProduction INTEGER NOT NULL,
     Calories INTEGER NOT NULL,
     Fat INTEGER NOT NULL,
     SaturatedFat INTEGER NOT NULL,
     TransFat INTEGER NOT NULL,
     Cholesterol INTEGER NOT NULL,
     Sodium INTEGER NOT NULL,
     Carbohydrates INTEGER NOT NULL,
     DietaryFiber INTEGER NOT NULL,
     Sugar INTEGER NOT NULL,
     Protein INTEGER NOT NULL 
);

DROP TABLE IF EXISTS TransactionLine;
CREATE TABLE TransactionLine
(
     TransactionID VARCHAR(7) NOT NULL REFERENCES Transactions(TransactionID)PRIMARY KEY,
     ProductCode VARCHAR(4) NOT NULL REFERENCES Main(ProductCode)
);

DROP TABLE IF EXISTS MainIngredientList;
CREATE TABLE MainIngredientList
(
     IngredientCode VARCHAR(4) PRIMARY KEY,
     ProductCode VARCHAR(4) NOT NULL REFERENCES Main(ProductCode),
     Description VARCHAR(50) NOT NULL,
     IngredientQuantity INTEGER NOT NULL,
     CostPerQuantity MONEY NOT NULL,
     IngredientUnit VARCHAR(4) NOT NULL,
     TotalCost MONEY NOT NULL
);

DROP TABLE IF EXISTS Inventory;
CREATE TABLE Inventory
(
     InventoryID VARCHAR(4) PRIMARY KEY,
     IngredientCode VARCHAR(4) NOT NULL REFERENCES MainIngredientList(IngredientCode),
     Description VARCHAR(50) NOT NULL,
     QuantityInStock INTEGER NOT NULL,
     InventoryUnit MONEY NOT NULL,
     CostPerUnit MONEY NOT NULL
);

DROP TABLE IF EXISTS Supply;
CREATE TABLE Supply
(
     OrderID VARCHAR(7) PRIMARY KEY,
     IngredientCode VARCHAR(4) NOT NULL REFERENCES MainIngredientList(IngredientCode),
     Description VARCHAR(50) NOT NULL,
     OrderDate DATE NOT NULL,
     OrderTime TIME NOT NULL,
     QuantityOrdered INTEGER NOT NULL,
     SupplyUnit VARCHAR(4) NOT NULL,
     UnitPrice MONEY NOT NULL,
     OrderedTo VARCHAR(25) NOT NULL,
     OrderedBy VARCHAR(25) NOT NULL
);


DROP TABLE IF EXISTS UserInformation;
CREATE TABLE UserInformation
(
     EmployeeCode VARCHAR(4) PRIMARY KEY,
     FirstName VARCHAR(25) NOT NULL,
     LastName VARCHAR(25) NOT NULL,
     CellNumber VARCHAR(10) NOT NULL,
     EmailAddress VARCHAR(35) NOT NULL,
     UserName VARCHAR(25) NOT NULL,
     Password VARCHAR(25) NOT NULL,
     Active Boolean NOT NULL,
     DateCreated Date NOT NULL,
     LastLoginDate DATE,
     LastLoginTime TIME
);