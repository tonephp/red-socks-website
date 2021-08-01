return (
    <>
        <Header>
        <StaticQuery 
            query={`${navigationQuery}`} 
            render={(data) => {
                const node = data.prismic.allNavigations.edges[0].node;
                
                return (
                    <>
                        <Branding>{node.branding}</Branding>
                        <NavLinks>
                            {node.navigation_links.map((item, idx) => {
                            return (
                                <NavLink key={idx}>
                                <Link to={`/${item.link._meta.uid}`}>{item.label}</Link>
                                </NavLink>
                            )
                            })}
                        </NavLinks>
                    </>
                )
            }} 
        />
        </Header>
        <Main>{children}</Main>
    </>
)