CREATE TABLE IF NOT EXISTS `operationstable1` (
  `operationID` int(10) NOT NULL AUTO_INCREMENT,
  `patientID` int(10) NOT NULL,
  `physicianID` varchar(10) NOT NULL,
  `operationname` varchar(30) NOT NULL,
  `florencetime` varchar(30) NOT NULL,
  `DAP` varchar(30) NOT NULL,
  `referencedose` varchar(30) NOT NULL,
  `operationdate` date NOT NULL,
  PRIMARY KEY (`operationID`,`patientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;