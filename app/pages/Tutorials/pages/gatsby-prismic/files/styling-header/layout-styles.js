const Header = styled.header`
  display: flex;
  background: black;
  height: 66px;
  padding: 0 16px;
  box-sizing: border-box;
`;

const NavLinks = styled.div`
  margin-left: auto;
  display: flex;
`;

const NavLink = styled.div`
  margin: auto 0;
  a {
    color: white;
    padding: 0 16px;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    &:hover {
      color: orange;
    }
  }
`;