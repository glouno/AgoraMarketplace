CREATE TABLE bids (
  id INT(11) NOT NULL AUTO_INCREMENT,
  listing_id int NOT NULL,
  bidder_id INT(11) NOT NULL,
  bid_amount DECIMAL(10,2) NOT NULL,
  bid_time DATETIME NOT NULL,
  PRIMARY KEY (id)
);