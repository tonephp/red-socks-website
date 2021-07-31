/**
 * Layout component that queries for data
 * with Gatsby's useStaticQuery component
 *
 * See: https://www.gatsbyjs.com/docs/use-static-query/
 */

 import * as React from "react"
 import PropTypes from "prop-types"
 import { StaticQuery, graphql, Link } from "gatsby"
 import styled from "styled-components"
 
 import "./layout.css"
 
 const Main = styled.main`
   max-width: 800px;
   margin: 0 auto;
 `;
 
 const NavLink = styled.div``;
 
 const navigationQuery = graphql`
 {
   prismic {
     allNavigations {
       edges {
         node {
           navigation_links {
             label
             link {
               ... on PRISMIC_Page {
                 _meta {
                   uid
                 }
               }
             }
           }
         }
       }
     }
   }
 }
 `;
 
 const Layout = ({ children }) => {
 
   return (
     <>
       <StaticQuery 
         query={`${navigationQuery}`} 
         render={(data) => {
           const node = data.prismic.allNavigations.edges[0].node;
           
           return (
             <div>
               {node.navigation_links.map((item, idx) => {
                 console.log(item);
                 return (
                   <NavLink key={idx}>
                     <Link to={`/${item.link._meta.uid}`}>{item.label}</Link>
                   </NavLink>
                 )
               })}
             </div>
           )
         }} 
       />
       <Main>{children}</Main>
     </>
   )
 }
 
 Layout.propTypes = {
   children: PropTypes.node.isRequired,
 }
 
 export default Layout