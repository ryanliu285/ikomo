pragma solidity ^0.4.17;

import 'zeppelin-solidity/contracts/token/ERC721/ERC721Token.sol';
import 'zeppelin-solidity/contracts/ownership/Ownable.sol';

contract KomoCoin is ERC721Token, Ownable {
  string public constant name = "KomoCoin";
  string public constant symbol = "KC";
}
