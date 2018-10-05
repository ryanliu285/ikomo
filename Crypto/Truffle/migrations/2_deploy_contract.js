var KomoCoin = artifacts.require("KomoCoin");

module.exports = function(deployer) {
    deployer.deploy(KomoCoin, {gas: 2000000});
};
