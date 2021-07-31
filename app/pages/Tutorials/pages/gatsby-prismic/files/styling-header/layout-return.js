return (
    <>
      <Header>
        <NavLinks>
          <StaticQuery 
            query={`${navigationQuery}`} 
            render={(data) => {
              const node = data.prismic.allNavigations.edges[0].node;
              
              return (
                <>
                  {node.navigation_links.map((item, idx) => {
                    return (
                      <NavLink key={idx}>
                        <Link to={`/${item.link._meta.uid}`}>{item.label}</Link>
                      </NavLink>
                    )
                  })}
                </>
              )
            }} 
          />
        </NavLinks>
      </Header>
      <Main>{children}</Main>
    </>
)