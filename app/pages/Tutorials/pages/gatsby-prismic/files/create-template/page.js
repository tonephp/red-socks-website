import { graphql } from 'gatsby';
import { RichText } from 'prismic-reactjs';
import React from 'react';

export const query = graphql`
  query PageQuery($id: String) {
    prismic {
      allPages(id: $id) {
        edges {
          node {
            page_title
            content
            _meta {
              uid
              id
            }
          }
        }
      }
    }
  }
`;

const Page = (props) => {
  const node = props.data.prismic.allPages.edges[0].node;
  const pageTitle = node.page_title;
  const content = node.content;
  
  return (
    <>
      <RichText render={pageTitle} />
      <RichText render={content} />
    </>
  )
}

export default Page;